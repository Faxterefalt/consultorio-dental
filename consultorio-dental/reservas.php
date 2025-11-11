<?php

// Manejar las peticiones AJAX ANTES de cualquier output HTML
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    header('Content-Type: application/json');
    
    // Verificar disponibilidad
    if ($_POST['action'] === 'verificar') {
        $fecha = $_POST['fecha'] ?? '';
        $hora = $_POST['hora'] ?? '';
        
        $citasFile = './data/citas.txt';
        $disponible = true;
        
        if (file_exists($citasFile)) {
            $citas = file($citasFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($citas as $cita) {
                $datos = explode('|', $cita);
                if (count($datos) >= 5) {
                    $citaFecha = $datos[3];
                    $citaHora = $datos[4];
                    
                    if ($citaFecha === $fecha && $citaHora === $hora) {
                        $disponible = false;
                        break;
                    }
                }
            }
        }
        
        echo json_encode(['disponible' => $disponible]);
        exit;
    }
    
    // Registrar la cita
    if ($_POST['action'] === 'registrar') {
        $nombre = $_POST['nombre'] ?? '';
        $telefono = $_POST['telefono'] ?? '';
        $servicio = $_POST['servicio'] ?? '';
        $fecha = $_POST['fecha'] ?? '';
        $hora = $_POST['hora'] ?? '';
        
        // Validar que todos los campos estén presentes
        if (empty($nombre) || empty($telefono) || empty($servicio) || empty($fecha) || empty($hora)) {
            echo json_encode(['success' => false, 'error' => 'Datos incompletos']);
            exit;
        }
        
        // Crear directorio si no existe
        $dataDir = './data';
        if (!is_dir($dataDir)) {
            if (!mkdir($dataDir, 0755, true)) {
                echo json_encode(['success' => false, 'error' => 'No se pudo crear el directorio']);
                exit;
            }
        }
        
        $citasFile = $dataDir . '/citas.txt';
        
        // Verificar nuevamente disponibilidad antes de guardar
        if (file_exists($citasFile)) {
            $citas = file($citasFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($citas as $cita) {
                $datos = explode('|', $cita);
                if (count($datos) >= 5) {
                    $citaFecha = $datos[3];
                    $citaHora = $datos[4];
                    
                    if ($citaFecha === $fecha && $citaHora === $hora) {
                        echo json_encode(['success' => false, 'error' => 'Horario ya reservado']);
                        exit;
                    }
                }
            }
        }
        
        // Formato: Nombre|Teléfono|Servicio|Fecha|Hora|FechaRegistro
        $registro = implode('|', [
            $nombre,
            $telefono,
            $servicio,
            $fecha,
            $hora,
            date('Y-m-d H:i:s')
        ]) . PHP_EOL;
        
        // Intentar guardar el archivo
        if (file_put_contents($citasFile, $registro, FILE_APPEND | LOCK_EX) !== false) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => 'No se pudo guardar la cita']);
        }
        exit;
    }
}

// Configuración de la página
$pageTitle = "Reservar Cita";
$siteName = "SANDENT";
$phone = "73986206";

include './header.php';
?>

<section id="consulta" class="form-section container">
    <h2>Formulario de Consulta</h2>
    <form id="consulta-form" data-whatsapp="<?php echo $phone; ?>" action="#" method="post">
        <label>Nombre completo:</label>
        <input type="text" name="nombre" required>

        <label>Correo electrónico:</label>
        <input type="email" name="email" required>

        <label>Mensaje o consulta:</label>
        <textarea name="mensaje" rows="5" required></textarea>

        <button type="submit">Enviar Consulta</button>
    </form>
</section>

<section id="reserva" class="form-section container">
    <h2>Reservar Cita</h2>
    <form id="reserva-form" data-whatsapp="<?php echo $phone; ?>" action="#" method="post">
        <label>Nombre completo:</label>
        <input type="text" name="nombre" required>

        <label>Teléfono:</label>
        <input type="tel" name="telefono" required>

        <label>Servicio a realizar:</label>
        <select name="servicio" required>
            <option value="">Seleccione un servicio</option>
            <option value="Ortodoncia">Ortodoncia</option>
            <option value="Implantes Dentales">Implantes Dentales</option>
            <option value="Cirugía de Terceros Molares">Cirugía de Terceros Molares</option>
            <option value="Endodoncia">Endodoncia</option>
        </select>

        <label>Fecha de la cita:</label>
        <input type="date" name="fecha" required>

        <label>Hora:</label>
        <input type="time" name="hora" required>

        <button type="submit">Reservar Cita</button>
    </form>
</section>

<!-- Modal de Confirmación -->
<div id="modal-confirmacion" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Confirmar Cita</h2>
        <div id="modal-body">
            <p><strong>Nombre:</strong> <span id="modal-nombre"></span></p>
            <p><strong>Teléfono:</strong> <span id="modal-telefono"></span></p>
            <p><strong>Servicio:</strong> <span id="modal-servicio"></span></p>
            <p><strong>Fecha:</strong> <span id="modal-fecha"></span></p>
            <p><strong>Hora:</strong> <span id="modal-hora"></span></p>
        </div>
        <div class="modal-buttons">
            <button id="btn-confirmar" class="btn-confirm">Confirmar</button>
            <button id="btn-cancelar" class="btn-cancel">Cancelar</button>
        </div>
    </div>
</div>

<style>
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    background-color: #fefefe;
    margin: 10% auto;
    padding: 30px;
    border: 1px solid #888;
    border-radius: 10px;
    width: 90%;
    max-width: 500px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: #000;
}

.modal-buttons {
    margin-top: 20px;
    display: flex;
    gap: 10px;
    justify-content: flex-end;
}

.btn-confirm,
.btn-cancel {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.btn-confirm {
    background-color: #4CAF50;
    color: white;
}

.btn-confirm:hover {
    background-color: #45a049;
}

.btn-cancel {
    background-color: #f44336;
    color: white;
}

.btn-cancel:hover {
    background-color: #da190b;
}

#modal-body p {
    margin: 10px 0;
    font-size: 16px;
}
</style>

<script src="./assets/js/consulta-whatsapp.js"></script>
<script src="./assets/js/reserva-cita.js"></script>

<?php include './footer.php'; ?>