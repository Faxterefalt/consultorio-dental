<?php

// Configuración de la página
$pageTitle = "Odontopediatría";
$siteName = "SANDENT";
$phone = "73986206";
$address = "Km 7.5 calle chacarrera sobre la avenida Sacaba-Guadalupe";
$horario = "8:30am - 4:00pm";

// Datos del servicio
$servicio = [
    'titulo' => 'Odontopediatría',
    'subtitulo' => 'Cuidado dental especializado para niños',
    'descripcion' => 'En SANDENT nos especializamos en la atención dental infantil, ofreciendo un ambiente amable, seguro y lleno de confianza. Nuestro objetivo es que los niños disfruten sus visitas al dentista mientras se cuida su salud bucal desde temprana edad.',
    'icono' => 'fa-baby',
    'importancia' => [
        'Previene caries y enfermedades de las encías desde la infancia.',
        'Detecta problemas de crecimiento o alineación dental a tiempo.',
        'Ayuda a los niños a desarrollar buenos hábitos de higiene bucal.',
        'Disminuye el miedo o ansiedad hacia las consultas odontológicas.'
    ],
    'servicios' => [
        'Selladores de fosas y fisuras.',
        'Limpiezas y fluorizaciones dentales.',
        'Restauraciones estéticas en dientes temporales.',
        'Tratamiento de caries infantil.',
        'Educación sobre higiene y alimentación saludable.'
    ],
    'recomendaciones' => [
        'Llevar al niño al dentista a partir del primer año de vida.',
        'Evitar el consumo excesivo de azúcares y bebidas gaseosas.',
        'Supervisar el cepillado diario de los dientes.',
        'Revisar periódicamente el crecimiento y erupción dental.'
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

        <h2>¿Qué es la Odontopediatría?</h2>
        <p>
            Es la rama de la odontología encargada de cuidar la salud oral de los niños desde su 
            nacimiento hasta la adolescencia. Incluye tratamientos preventivos, restaurativos y 
            educativos para fomentar hábitos saludables y evitar problemas futuros.
        </p>

        <h2>Importancia de la Atención Temprana</h2>
        <ul>
            <?php foreach ($servicio['importancia'] as $punto): ?>
                <li><?php echo $punto; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Servicios Odontopediátricos en SANDENT</h2>
        <ul>
            <?php foreach ($servicio['servicios'] as $servicio_item): ?>
                <li><?php echo $servicio_item; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Recomendaciones para Padres</h2>
        <ul>
            <?php foreach ($servicio['recomendaciones'] as $recomendacion): ?>
                <li><?php echo $recomendacion; ?></li>
            <?php endforeach; ?>
        </ul>

        <p class="conclusion">
            En <strong>SANDENT</strong> trabajamos con paciencia, empatía y profesionalismo, 
            asegurando que cada niño viva una experiencia dental positiva y educativa.
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