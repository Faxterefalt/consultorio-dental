<?php

// Configuración de la página
$pageTitle = "Prótesis Fija y Removible";
$siteName = "SANDENT";
$phone = "73986206";
$address = "Km 7.5 calle chacarrera sobre la avenida Sacaba-Guadalupe";
$horario = "8:30am - 4:00pm";

// Datos del servicio
$servicio = [
    'titulo' => 'Prótesis Fija y Removible',
    'subtitulo' => 'Soluciones estéticas y funcionales para tu sonrisa',
    'descripcion' => 'En SANDENT ofrecemos soluciones personalizadas en prótesis fija y removible, devolviendo la funcionalidad y estética a tu sonrisa. Utilizamos materiales de alta calidad para garantizar resistencia, comodidad y una apariencia completamente natural.',
    'icono' => 'fa-teeth-open',
    'tipos' => [
        [
            'nombre' => 'Prótesis Fija',
            'descripcion' => 'Es una excelente opción para reemplazar dientes perdidos de forma permanente. Se adhiere mediante coronas o puentes dentales que se ajustan a tus piezas naturales. No se retira para la limpieza y proporciona una sensación muy similar a la de los dientes originales.'
        ],
        [
            'nombre' => 'Prótesis Removible',
            'descripcion' => 'Esta alternativa permite reemplazar uno o varios dientes de manera práctica y económica. Puede retirarse para su limpieza diaria, siendo ideal para pacientes que necesitan una solución temporal o más accesible.'
        ]
    ],
    'beneficios' => [
        'Recupera la función masticatoria completa.',
        'Mejora la pronunciación y el habla.',
        'Restaura la estética de la sonrisa.',
        'Previene el desplazamiento de dientes adyacentes.',
        'Aumenta la confianza y autoestima del paciente.',
        'Soluciones personalizadas según tus necesidades.'
    ],
    'cuidados' => [
        'Cepillar las prótesis después de cada comida con un cepillo suave.',
        'Evitar alimentos muy duros o pegajosos que puedan dañarlas.',
        'Realizar controles periódicos en el consultorio para mantener su ajuste adecuado.',
        'Guardar las prótesis removibles en agua limpia cuando no se usen.',
        'Mantener una buena higiene oral de las encías y dientes naturales restantes.',
        'No usar productos abrasivos que puedan rayar la superficie de la prótesis.'
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

        <h2>Tipos de Prótesis Dentales</h2>
        <?php foreach ($servicio['tipos'] as $tipo): ?>
            <h3><?php echo $tipo['nombre']; ?></h3>
            <p><?php echo $tipo['descripcion']; ?></p>
        <?php endforeach; ?>

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

        <h2>¿Por Qué Elegir SANDENT?</h2>
        <p class="conclusion">
            Con nuestras prótesis dentales, podrás recuperar no solo la función masticatoria, 
            sino también la confianza al sonreír. Cada tratamiento se diseña de forma personalizada 
            para lograr armonía estética y bienestar oral a largo plazo. Nuestro equipo especializado 
            trabaja con los mejores materiales y tecnología moderna para garantizar resultados 
            duraderos y naturales.
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