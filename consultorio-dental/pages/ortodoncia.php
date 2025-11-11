<?php
// Configuración de la página
$pageTitle = "Ortodoncia";
$siteName = "SANDENT";
$phone = "73986206";
$address = "Km 7.5 calle chacarrera sobre la avenida Sacaba-Guadalupe";
$horario = "8:30am - 4:00pm";

// Datos del servicio
$servicio = [
    'titulo' => 'Ortodoncia',
    'subtitulo' => 'Sonrisas perfectamente alineadas',
    'descripcion' => 'En SANDENT contamos con tratamientos de ortodoncia diseñados para corregir la posición de los dientes y mejorar tanto la estética de la sonrisa como la función masticatoria.',
    'icono' => 'fa-teeth',
    'tipos' => [
        [
            'nombre' => 'Ortodoncia metálica',
            'descripcion' => 'la opción más tradicional y económica.'
        ],
        [
            'nombre' => 'Ortodoncia estética',
            'descripcion' => 'con brackets de cerámica o zafiro que se mimetizan con los dientes.'
        ],
        [
            'nombre' => 'Alineadores invisibles',
            'descripcion' => 'sistema moderno, removible y casi imperceptible.'
        ]
    ],
    'beneficios' => [
        'Mejora de la estética facial y de la sonrisa.',
        'Facilita la limpieza dental y previene enfermedades periodontales.',
        'Corrige problemas de mordida y habla.',
        'Evita el desgaste prematuro de las piezas dentales.'
    ],
    'cuidados' => [
        'Evitar alimentos duros o pegajosos que puedan dañar los brackets.',
        'Mantener una higiene oral minuciosa con cepillo e hilo dental.',
        'Asistir puntualmente a las citas de control.',
        'Usar los elásticos o alineadores según las indicaciones del ortodoncista.'
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

        <h2>¿Qué es la Ortodoncia?</h2>
        <p>
            Es la especialidad odontológica encargada de alinear los dientes y corregir las alteraciones 
            de la mordida. Mediante el uso de brackets o alineadores invisibles, logramos una sonrisa 
            armónica y una mejor salud bucodental.
        </p>

        <h2>Tipos de Tratamientos</h2>
        <ul>
            <?php foreach ($servicio['tipos'] as $tipo): ?>
                <li>
                    <strong><?php echo $tipo['nombre']; ?>:</strong> 
                    <?php echo $tipo['descripcion']; ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <h2>Beneficios</h2>
        <ul>
            <?php foreach ($servicio['beneficios'] as $beneficio): ?>
                <li><?php echo $beneficio; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Cuidados Durante el Tratamiento</h2>
        <ul>
            <?php foreach ($servicio['cuidados'] as $cuidado): ?>
                <li><?php echo $cuidado; ?></li>
            <?php endforeach; ?>
        </ul>

        <p class="conclusion">
            Nuestro equipo profesional te acompañará durante todo el proceso, garantizando 
            un tratamiento personalizado que se adapte a tus necesidades y estilo de vida.
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