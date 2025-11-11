<?php

// Configuración de la página
$pageTitle = "Endodoncia";
$siteName = "SANDENT";
$phone = "73986206";
$address = "Km 7.5 calle chacarrera sobre la avenida Sacaba-Guadalupe";
$horario = "8:30am - 4:00pm";

// Datos del servicio
$servicio = [
    'titulo' => 'Endodoncia',
    'subtitulo' => 'Salvamos tu diente natural',
    'descripcion' => 'En SANDENT ofrecemos tratamientos de endodoncia de alta precisión para conservar las piezas dentales dañadas y devolver la salud bucal de nuestros pacientes. Trabajamos con tecnología moderna y técnicas avanzadas que garantizan resultados duraderos y sin dolor.',
    'icono' => 'fa-heartbeat',
    'cuando_necesario' => [
        'Cuando existe dolor dental intenso o sensibilidad prolongada al calor o al frío.',
        'En casos de caries profundas que alcanzan la pulpa del diente.',
        'Si hay infecciones, abscesos o inflamación en la raíz dental.',
        'Tras un golpe o fractura que afecta la parte interna del diente.'
    ],
    'beneficios' => [
        'Evita la pérdida del diente natural.',
        'Elimina el dolor y la infección de forma efectiva.',
        'Restaura la funcionalidad y estética del diente tratado.',
        'Contribuye a mantener una buena salud oral general.'
    ],
    'cuidados' => [
        'Evitar masticar alimentos duros en la zona tratada durante los primeros días.',
        'Mantener una higiene bucal adecuada con cepillado y enjuague diario.',
        'Asistir a los controles dentales recomendados por el especialista.',
        'Reemplazar la restauración temporal por una definitiva si se indica.'
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

        <h2>¿Qué es la Endodoncia?</h2>
        <p>
            La endodoncia, conocida también como "tratamiento de conducto", se encarga de eliminar el tejido pulpar 
            infectado o dañado en el interior del diente. Este procedimiento permite salvar la pieza dental 
            afectada, evitando su extracción y manteniendo su funcionalidad natural.
        </p>

        <h2>¿Cuándo se Necesita una Endodoncia?</h2>
        <ul>
            <?php foreach ($servicio['cuando_necesario'] as $razon): ?>
                <li><?php echo $razon; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Beneficios del Tratamiento Endodóntico</h2>
        <ul>
            <?php foreach ($servicio['beneficios'] as $beneficio): ?>
                <li><?php echo $beneficio; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Procedimiento en SANDENT</h2>
        <p>
            En <strong>SANDENT</strong> realizamos la endodoncia en un ambiente seguro, utilizando anestesia local 
            y equipos especializados para garantizar comodidad y precisión en cada etapa del tratamiento. 
            Nuestro equipo profesional evalúa, limpia, desinfecta y sella el conducto radicular con materiales 
            biocompatibles de última generación.
        </p>

        <h2>Cuidados Posteriores</h2>
        <ul>
            <?php foreach ($servicio['cuidados'] as $cuidado): ?>
                <li><?php echo $cuidado; ?></li>
            <?php endforeach; ?>
        </ul>

        <p class="conclusion">
            En <strong>SANDENT</strong> trabajamos con dedicación, precisión y empatía para preservar tu sonrisa 
            y devolver la funcionalidad a tus dientes, siempre priorizando tu bienestar y comodidad.
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