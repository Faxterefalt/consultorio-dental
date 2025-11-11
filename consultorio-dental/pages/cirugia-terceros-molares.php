<?php

// Configuración de la página
$pageTitle = "Cirugía de Terceros Molares";
$siteName = "SANDENT";
$phone = "73986206";

// Datos del servicio
$servicio = [
    'titulo' => 'Cirugía de Terceros Molares',
    'subtitulo' => 'Extracción segura y sin complicaciones',
    'descripcion' => 'En SANDENT ofrecemos el servicio de extracción de terceros molares (muelas del juicio) con técnicas modernas y seguras. Nuestro equipo especializado garantiza un procedimiento cómodo, rápido y con mínimas molestias postoperatorias.',
    'icono' => 'fa-syringe',
    'cuando_necesario' => [
        'Dolor o inflamación constante en la zona de las muelas del juicio.',
        'Muelas impactadas o mal posicionadas que afectan otros dientes.',
        'Infecciones recurrentes en la encía alrededor de la muela.',
        'Caries profundas en los terceros molares de difícil tratamiento.',
        'Problemas de apiñamiento dental causados por falta de espacio.'
    ],
    'beneficios' => [
        'Previene infecciones y dolor crónico.',
        'Evita el daño a dientes adyacentes.',
        'Mejora la alineación dental y previene apiñamiento.',
        'Reduce el riesgo de quistes o tumores en la mandíbula.',
        'Recuperación rápida con cuidados adecuados.'
    ],
    'procedimiento' => [
        'Evaluación previa con radiografías panorámicas o tomografías.',
        'Aplicación de anestesia local para garantizar un procedimiento sin dolor.',
        'Extracción cuidadosa de la muela del juicio.',
        'Sutura de la zona si es necesario.',
        'Indicaciones y medicación postoperatoria.'
    ],
    'cuidados' => [
        'Aplicar compresas frías en la zona externa para reducir la inflamación.',
        'Evitar alimentos duros, calientes o picantes durante los primeros días.',
        'No enjuagar vigorosamente ni escupir con fuerza las primeras 24 horas.',
        'Tomar los medicamentos recetados según las indicaciones.',
        'Mantener buena higiene oral, evitando la zona de la cirugía.',
        'No fumar ni consumir alcohol durante el periodo de recuperación.',
        'Asistir a los controles postoperatorios programados.'
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

        <h2>¿Qué son los Terceros Molares?</h2>
        <p>
            Los terceros molares, comúnmente conocidos como "muelas del juicio", son los últimos dientes 
            en erupcionar, generalmente entre los 17 y 25 años de edad. En muchos casos, no tienen suficiente 
            espacio para desarrollarse correctamente, lo que puede causar dolor, infecciones y otros problemas 
            dentales que requieren su extracción.
        </p>

        <h2>¿Cuándo es Necesaria la Extracción?</h2>
        <ul>
            <?php foreach ($servicio['cuando_necesario'] as $razon): ?>
                <li><?php echo $razon; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Beneficios de la Cirugía</h2>
        <ul>
            <?php foreach ($servicio['beneficios'] as $beneficio): ?>
                <li><?php echo $beneficio; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Procedimiento en SANDENT</h2>
        <p>
            En <strong>SANDENT</strong> realizamos la cirugía de terceros molares en un ambiente seguro 
            y con equipamiento especializado. Nuestro protocolo incluye:
        </p>
        <ul>
            <?php foreach ($servicio['procedimiento'] as $paso): ?>
                <li><?php echo $paso; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Cuidados Postoperatorios</h2>
        <ul>
            <?php foreach ($servicio['cuidados'] as $cuidado): ?>
                <li><?php echo $cuidado; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Resultados Esperados</h2>
        <p class="conclusion">
            La mayoría de los pacientes experimenta una recuperación completa en 7 a 10 días. 
            En <strong>SANDENT</strong> trabajamos con dedicación, precisión y empatía para garantizar 
            un procedimiento exitoso que preserve tu salud bucal y mejore tu calidad de vida. 
            Nuestro equipo te acompañará en todo el proceso de recuperación.
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