<?php

// Configuración de la página
$pageTitle = "Operatoria Dental";
$siteName = "SANDENT";
$phone = "73986206";

// Datos del servicio
$servicio = [
    'titulo' => 'Operatoria Dental',
    'subtitulo' => 'Restauración estética y funcional',
    'descripcion' => 'En SANDENT ofrecemos tratamientos de operatoria dental que permiten restaurar la forma, función y estética de los dientes dañados por caries, fracturas o desgastes. Nuestro enfoque combina precisión técnica, materiales de alta calidad y una atención personalizada para devolver la salud y belleza a tu sonrisa.',
    'icono' => 'fa-hand-holding-medical',
    'cuando_necesario' => [
        'En presencia de caries dental.',
        'Cuando existe fractura o desgaste en una pieza dental.',
        'Si hay restauraciones antiguas deterioradas.',
        'Para mejorar la apariencia estética de los dientes.'
    ],
    'beneficios' => [
        'Restaura la funcionalidad y fuerza del diente.',
        'Mejora la estética de la sonrisa con resultados naturales.',
        'Previene el avance de la caries y posibles complicaciones.',
        'Contribuye al bienestar bucal general.'
    ],
    'cuidados' => [
        'Mantener una higiene bucal adecuada con cepillado y uso de hilo dental.',
        'Evitar alimentos muy duros o pegajosos después de una restauración.',
        'Asistir a controles periódicos para revisar el estado de las restauraciones.',
        'Adoptar hábitos alimenticios saludables para prevenir nuevas lesiones.'
    ]
];

include '../header.php';
?>

<section class="servicio-detalle">
    <div class="servicio-header">
        <i class="fa-solid <?php echo $servicio['icono']; ?> servicio-icon"></i>
        <h1><?php echo $servicio['titulo']; ?></h1>
        <p class="subtitulo"><?php echo $servicio['subtitulo']; ?></p>
    </div>

    <div class="servicio-contenido">
        <p class="intro"><?php echo $servicio['descripcion']; ?></p>

        <h2>¿Qué es la Operatoria Dental?</h2>
        <p>
            La operatoria dental es la especialidad encargada de diagnosticar, prevenir y tratar 
            las lesiones que afectan la estructura de los dientes. A través de procedimientos restauradores, 
            se eliminan los tejidos dañados y se reconstruye el diente con materiales estéticos 
            que imitan su color y forma natural.
        </p>

        <h2>¿Cuándo se Necesita un Tratamiento de Operatoria?</h2>
        <ul>
            <?php foreach ($servicio['cuando_necesario'] as $razon): ?>
                <li><?php echo $razon; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Procedimiento en SANDENT</h2>
        <p>
            En <strong>SANDENT</strong> realizamos la operatoria dental utilizando anestesia local para asegurar 
            una experiencia indolora. El procedimiento incluye la eliminación del tejido afectado, 
            limpieza del área y colocación de una restauración estética de resina compuesta o cerámica, 
            según las necesidades de cada paciente.
        </p>

        <h2>Beneficios del Tratamiento</h2>
        <ul>
            <?php foreach ($servicio['beneficios'] as $beneficio): ?>
                <li><?php echo $beneficio; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Cuidados Recomendados</h2>
        <ul>
            <?php foreach ($servicio['cuidados'] as $cuidado): ?>
                <li><?php echo $cuidado; ?></li>
            <?php endforeach; ?>
        </ul>

        <p class="conclusion">
            En <strong>SANDENT</strong> trabajamos con precisión, ética y compromiso, garantizando resultados 
            duraderos que combinan salud, estética y funcionalidad en cada tratamiento dental.
        </p>

        <div class="servicio-acciones">
            <a href="../index.php#servicios" class="btn-volver">
                <i class="fa-solid fa-arrow-left"></i> Volver a Servicios
            </a>
            <a href="../reservas.php" class="btn-reservar">
                <i class="fa-solid fa-calendar-check"></i> Reservar Cita
            </a>
        </div>
    </div>
</section>

<?php include '../footer.php'; ?>