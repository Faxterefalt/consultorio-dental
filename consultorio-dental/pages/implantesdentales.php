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

<!-- Agregar CSS específico -->
<link rel="stylesheet" href="../assets/css/implantes.css">

<div class="implantes-page">
    <!-- HERO SECTION -->
    <section class="implantes-hero">
        <div class="container hero-content">
            <i class="fa-solid fa-tooth hero-icon"></i>
            <h1><?php echo $servicio['titulo']; ?></h1>
            <p class="hero-subtitle"><?php echo $servicio['subtitulo']; ?></p>
            <p class="hero-description"><?php echo $servicio['descripcion']; ?></p>
        </div>
    </section>

    <!-- INTRODUCCIÓN -->
    <section class="intro-section">
        <div class="intro-grid">
            <div class="intro-image">
                <i class="fa-solid fa-tooth"></i>
            </div>
            <div class="intro-text">
                <h2>¿Qué son los Implantes Dentales?</h2>
                <p>
                    Los implantes son estructuras de titanio que se colocan en el hueso maxilar o mandibular 
                    para sustituir la raíz de un diente perdido. Sobre ellos se coloca una corona o prótesis 
                    que se adapta perfectamente a la forma, color y función del diente original.
                </p>
                <p>
                    Con los implantes dentales, recuperarás no solo la estética de tu sonrisa, 
                    sino también la funcionalidad completa para comer, hablar y sonreír con total confianza.
                </p>
            </div>
        </div>
    </section>

    <!-- VENTAJAS -->
    <section class="ventajas-section">
        <h2 class="section-title">Ventajas de los Implantes</h2>
        <p class="section-description">
            Los implantes dentales ofrecen múltiples beneficios que mejoran tu calidad de vida 
            y salud bucal de forma permanente.
        </p>
        
        <div class="ventajas-grid">
            <?php 
            $iconos_ventajas = ['fa-utensils', 'fa-bone', 'fa-teeth', 'fa-face-smile', 'fa-infinity'];
            foreach ($servicio['ventajas'] as $index => $ventaja): 
            ?>
                <div class="ventaja-card">
                    <div class="ventaja-icon">
                        <i class="fa-solid <?php echo $iconos_ventajas[$index]; ?>"></i>
                    </div>
                    <p><?php echo $ventaja; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- PROCEDIMIENTO -->
    <section class="procedimiento-section">
        <h2 class="section-title">Procedimiento en SANDENT</h2>
        <p class="section-description">
            El tratamiento se realiza en varias etapas controladas cuidadosamente 
            por nuestros especialistas:
        </p>
        
        <div class="steps-container">
            <?php foreach ($servicio['procedimiento'] as $index => $paso): ?>
                <div class="step-item">
                    <div class="step-number"><?php echo $index + 1; ?></div>
                    <div class="step-content">
                        <p><?php echo $paso; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- CUIDADOS -->
    <section class="cuidados-section">
        <h2 class="section-title">Cuidados Recomendados</h2>
        <p class="section-description">
            Para garantizar el éxito y durabilidad de tus implantes, es importante 
            seguir estas recomendaciones:
        </p>
        
        <div class="cuidados-grid">
            <?php 
            $iconos_cuidados = ['fa-ban', 'fa-tooth', 'fa-smoking-ban', 'fa-calendar-check'];
            foreach ($servicio['cuidados'] as $index => $cuidado): 
            ?>
                <div class="cuidado-item">
                    <div class="cuidado-check">
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
            <h2>¿Listo para recuperar tu sonrisa completa?</h2>
            <p>
                Los implantes dentales proporcionan una solución funcional, estética y duradera. 
                Nuestro equipo especializado garantiza resultados naturales y de larga duración.
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