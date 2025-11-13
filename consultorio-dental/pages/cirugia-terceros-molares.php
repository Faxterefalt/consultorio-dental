<?php

// Configuración de la página
$pageTitle = "Cirugía de Terceros Molares";
$siteName = "SANDENT";
$phone = "73986206";
$address = "Km 7.5 calle chacarrera sobre la avenida Sacaba-Guadalupe";
$horario = "8:30am - 4:00pm";

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

<!-- Agregar CSS específico -->
<link rel="stylesheet" href="../assets/css/cirugia-molares.css">

<div class="cirugia-page">
    <!-- HERO SECTION -->
    <section class="cirugia-hero">
        <div class="container hero-content">
            <i class="fa-solid fa-syringe hero-icon"></i>
            <h1><?php echo $servicio['titulo']; ?></h1>
            <p class="hero-subtitle"><?php echo $servicio['subtitulo']; ?></p>
            <p class="hero-description"><?php echo $servicio['descripcion']; ?></p>
        </div>
    </section>

    <!-- INTRODUCCIÓN -->
    <section class="intro-section">
        <div class="intro-grid">
            <div class="intro-image">
                <i class="fa-solid fa-teeth-open"></i>
            </div>
            <div class="intro-text">
                <h2>¿Qué son los Terceros Molares?</h2>
                <p>
                    Los terceros molares, comúnmente conocidos como "muelas del juicio", son los últimos dientes 
                    en erupcionar, generalmente entre los 17 y 25 años de edad. En muchos casos, no tienen suficiente 
                    espacio para desarrollarse correctamente, lo que puede causar dolor, infecciones y otros problemas 
                    dentales que requieren su extracción.
                </p>
                <p>
                    En SANDENT contamos con profesionales altamente capacitados y tecnología moderna 
                    para realizar este procedimiento de forma segura y con mínimas molestias.
                </p>
            </div>
        </div>
    </section>

    <!-- CUANDO ES NECESARIO -->
    <section class="necesario-section">
        <h2 class="section-title">¿Cuándo es Necesaria la Extracción?</h2>
        <p class="section-description">
            Existen varias situaciones que hacen necesaria la extracción de los terceros molares:
        </p>
        
        <div class="necesario-grid">
            <?php 
            $iconos_necesario = ['fa-face-grimace', 'fa-tooth', 'fa-virus', 'fa-bacteria', 'fa-compress'];
            foreach ($servicio['cuando_necesario'] as $index => $razon): 
            ?>
                <div class="necesario-card">
                    <div class="necesario-icon">
                        <i class="fa-solid <?php echo $iconos_necesario[$index]; ?>"></i>
                    </div>
                    <p><?php echo $razon; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- BENEFICIOS -->
    <section class="beneficios-section">
        <h2 class="section-title">Beneficios de la Cirugía</h2>
        <p class="section-description">
            La extracción de terceros molares previene problemas futuros y mejora tu salud bucal:
        </p>
        
        <div class="beneficios-list">
            <?php 
            $iconos_beneficios = ['fa-shield-virus', 'fa-tooth', 'fa-teeth', 'fa-head-side-virus', 'fa-clock-rotate-left'];
            foreach ($servicio['beneficios'] as $index => $beneficio): 
            ?>
                <div class="beneficio-item">
                    <div class="beneficio-icon">
                        <i class="fa-solid <?php echo $iconos_beneficios[$index]; ?>"></i>
                    </div>
                    <div class="beneficio-text">
                        <p><?php echo $beneficio; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- PROCEDIMIENTO -->
    <section class="procedimiento-section">
        <h2 class="section-title">Procedimiento en SANDENT</h2>
        <p class="section-description">
            En SANDENT realizamos la cirugía en un ambiente seguro con equipamiento especializado:
        </p>
        
        <div class="procedimiento-steps">
            <?php foreach ($servicio['procedimiento'] as $paso): ?>
                <div class="proc-step">
                    <p><?php echo $paso; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- CUIDADOS -->
    <section class="cuidados-section">
        <h2 class="section-title">Cuidados Postoperatorios</h2>
        <p class="section-description">
            Sigue estas recomendaciones para una recuperación rápida y sin complicaciones:
        </p>
        
        <div class="cuidados-grid">
            <?php 
            $iconos_cuidados = ['fa-snowflake', 'fa-utensils', 'fa-face-rolling-eyes', 'fa-pills', 'fa-tooth', 'fa-smoking-ban', 'fa-calendar-check'];
            foreach ($servicio['cuidados'] as $index => $cuidado): 
            ?>
                <div class="cuidado-item">
                    <div class="cuidado-icon">
                        <i class="fa-solid <?php echo $iconos_cuidados[$index]; ?>"></i>
                    </div>
                    <div class="cuidado-text">
                        <p><?php echo $cuidado; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>¿Necesitas extraer tus muelas del juicio?</h2>
            <p>
                La mayoría de los pacientes experimenta una recuperación completa en 7 a 10 días. 
                En SANDENT trabajamos con dedicación, precisión y empatía para garantizar 
                un procedimiento exitoso que preserve tu salud bucal.
            </p>
            <div class="cta-buttons">
                <a href="../reservas.php" class="btn-cta btn-primary">
                    <i class="fa-solid fa-calendar-check"></i> Reservar Cita
                </a>
                <a href="../index.php#servicios" class="btn-cta btn-secondary">
                    <i class="fa-solid fa-arrow-left"></i> Ver Más Servicios
                </a>
            </div>
        </div>
    </section>
</div>

<?php include '../footer.php'; ?>