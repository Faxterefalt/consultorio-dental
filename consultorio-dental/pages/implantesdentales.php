<?php
// Configuración de la página
$pageTitle = "Implantes Dentales";
$siteName = "SANDENT";
$phone = "73986206";
$address = "Km 7.5 calle chacarrera sobre la avenida Sacaba-Guadalupe";
$horario = "8:30am - 4:00pm";

// Datos del servicio
$servicio = [
    'titulo' => 'Implantes Dentales',
    'subtitulo' => 'Recupera tu sonrisa de forma natural y permanente',
    'descripcion' => 'En SANDENT ofrecemos tratamientos de implantes dentales de alta precisión, empleando tecnología moderna y materiales biocompatibles que permiten reemplazar dientes perdidos con resultados naturales, seguros y duraderos.',
    'icono' => 'fa-tooth',
    'ventajas' => [
        'Restauran la función masticatoria y la estética dental.',
        'Evitan la pérdida de hueso en el área donde faltan dientes.',
        'No afectan las piezas dentales adyacentes.',
        'Ofrecen una sensación natural al hablar y comer.',
        'Tienen una larga durabilidad si se mantienen con buena higiene.'
    ],
    'procedimiento' => [
        'Colocación del implante en el hueso maxilar o mandibular.',
        'Periodo de osteointegración (unión del implante con el hueso).',
        'Colocación de la corona o prótesis definitiva.',
        'Control y seguimiento por nuestros especialistas.'
    ],
    'cuidados' => [
        'Evitar alimentos duros durante los primeros días posteriores a la cirugía.',
        'Mantener una higiene oral impecable para prevenir infecciones.',
        'No fumar durante el proceso de cicatrización.',
        'Asistir a controles periódicos para verificar el estado del implante.'
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

        <h2>¿Qué son los Implantes Dentales?</h2>
        <p>
            Los implantes son estructuras de titanio que se colocan en el hueso maxilar o mandibular 
            para sustituir la raíz de un diente perdido. Sobre ellos se coloca una corona o prótesis 
            que se adapta perfectamente a la forma, color y función del diente original.
        </p>

        <h2>Ventajas de los Implantes Dentales</h2>
        <ul>
            <?php foreach ($servicio['ventajas'] as $ventaja): ?>
                <li><?php echo $ventaja; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Procedimiento</h2>
        <p>
            El tratamiento se realiza en varias etapas controladas cuidadosamente por nuestros especialistas:
        </p>
        <ul>
            <?php foreach ($servicio['procedimiento'] as $paso): ?>
                <li><?php echo $paso; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Cuidados Recomendados</h2>
        <ul>
            <?php foreach ($servicio['cuidados'] as $cuidado): ?>
                <li><?php echo $cuidado; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Resultados Esperados</h2>
        <p class="conclusion">
            Los implantes dentales proporcionan una solución funcional, estética y duradera. 
            Permiten recuperar la confianza al sonreír y mejoran significativamente la calidad de vida 
            del paciente. Nuestro equipo especializado garantiza resultados naturales y de larga duración.
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