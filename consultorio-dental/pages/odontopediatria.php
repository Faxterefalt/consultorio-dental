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

<link rel="stylesheet" href="../assets/css/odontopediatria.css">

<div class="odontopediatria-page">
    <section class="odontopediatria-hero">
        <div class="container hero-content">
            <i class="fa-solid fa-baby hero-icon"></i>
            <h1><?php echo $servicio['titulo']; ?></h1>
            <p class="hero-subtitle"><?php echo $servicio['subtitulo']; ?></p>
            <p class="hero-description"><?php echo $servicio['descripcion']; ?></p>
        </div>
    </section>

    <section class="intro-section">
        <div class="intro-grid">
            <div class="intro-image">
                <i class="fa-solid fa-child-reaching"></i>
            </div>
            <div class="intro-text">
                <h2>¿Qué es la Odontopediatría?</h2>
                <p>
                    Es la rama de la odontología encargada de cuidar la salud oral de los niños desde su 
                    nacimiento hasta la adolescencia. Incluye tratamientos preventivos, restaurativos y 
                    educativos para fomentar hábitos saludables y evitar problemas futuros.
                </p>
                <p>
                    En SANDENT creamos un ambiente divertido y seguro donde los niños se sienten cómodos 
                    y aprenden a cuidar sus dientes desde pequeños.
                </p>
            </div>
        </div>
    </section>

    <section class="importancia-section">
        <h2 class="section-title">Importancia de la Atención Temprana</h2>
        <p class="section-description">
            Cuidar la salud dental desde la infancia previene problemas futuros y establece 
            buenos hábitos para toda la vida.
        </p>
        
        <div class="importancia-grid">
            <?php 
            $iconos_importancia = ['fa-shield-virus', 'fa-eye', 'fa-hands-bubbles', 'fa-face-smile'];
            foreach ($servicio['importancia'] as $index => $punto): 
            ?>
                <div class="importancia-card">
                    <div class="importancia-icon">
                        <i class="fa-solid <?php echo $iconos_importancia[$index]; ?>"></i>
                    </div>
                    <p><?php echo $punto; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="servicios-section">
        <h2 class="section-title">Servicios Odontopediátricos</h2>
        <p class="section-description">
            Tratamientos especializados diseñados para el cuidado dental infantil:
        </p>
        
        <div class="servicios-list">
            <?php 
            $iconos_servicios = ['fa-shield-halved', 'fa-spray-can-sparkles', 'fa-tooth', 'fa-virus-slash', 'fa-graduation-cap'];
            foreach ($servicio['servicios'] as $index => $servicio_item): 
            ?>
                <div class="servicio-item">
                    <div class="servicio-icon">
                        <i class="fa-solid <?php echo $iconos_servicios[$index]; ?>"></i>
                    </div>
                    <div class="servicio-text">
                        <p><?php echo $servicio_item; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="recomendaciones-section">
        <h2 class="section-title">Recomendaciones para Padres</h2>
        <p class="section-description">
            Consejos importantes para el cuidado dental de tus hijos:
        </p>
        
        <div class="recomendaciones-grid">
            <?php foreach ($servicio['recomendaciones'] as $index => $recomendacion): ?>
                <div class="recomendacion-card">
                    <div class="recomendacion-number"><?php echo $index + 1; ?></div>
                    <p><?php echo $recomendacion; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="cta-section">
        <div class="cta-content">
            <h2>¡Cuida la sonrisa de tus hijos desde pequeños!</h2>
            <p>
                En SANDENT trabajamos con paciencia, empatía y profesionalismo, 
                asegurando que cada niño viva una experiencia dental positiva y educativa.
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