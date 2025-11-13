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

<!-- Agregar CSS específico -->
<link rel="stylesheet" href="../assets/css/ortodoncia.css">

<div class="ortodoncia-page">
    <!-- HERO SECTION -->
    <section class="ortodoncia-hero">
        <div class="container hero-content">
            <i class="fa-solid fa-teeth hero-icon"></i>
            <h1><?php echo $servicio['titulo']; ?></h1>
            <p class="hero-subtitle"><?php echo $servicio['subtitulo']; ?></p>
            <p class="hero-description"><?php echo $servicio['descripcion']; ?></p>
        </div>
    </section>

    <!-- INTRODUCCIÓN CON IMAGEN -->
    <section class="intro-section">
        <div class="intro-grid">
            <div class="intro-image">
                <i class="fa-solid fa-teeth-open"></i>
            </div>
            <div class="intro-text">
                <h2>¿Qué es la Ortodoncia?</h2>
                <p>
                    Es la especialidad odontológica encargada de alinear los dientes y corregir las alteraciones 
                    de la mordida. Mediante el uso de brackets o alineadores invisibles, logramos una sonrisa 
                    armónica y una mejor salud bucodental.
                </p>
                <p>
                    Nuestros tratamientos ortodónticos están diseñados específicamente para cada paciente, 
                    utilizando tecnología de vanguardia y técnicas probadas que garantizan resultados 
                    excepcionales en el menor tiempo posible.
                </p>
            </div>
        </div>
    </section>

    <!-- TIPOS DE TRATAMIENTOS -->
    <section class="tipos-section">
        <h2 class="section-title">Tipos de Tratamientos</h2>
        <p class="section-description">
            Contamos con diferentes opciones de tratamiento adaptadas a tus necesidades, 
            estilo de vida y presupuesto.
        </p>
        
        <div class="tipos-grid">
            <?php 
            $iconos = ['fa-teeth', 'fa-gem', 'fa-eye-slash'];
            foreach ($servicio['tipos'] as $index => $tipo): 
            ?>
                <div class="tipo-card">
                    <div class="tipo-icon">
                        <i class="fa-solid <?php echo $iconos[$index]; ?>"></i>
                    </div>
                    <h3><?php echo $tipo['nombre']; ?></h3>
                    <p><?php echo $tipo['descripcion']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- BENEFICIOS -->
    <section class="beneficios-section">
        <h2 class="section-title">Beneficios del Tratamiento</h2>
        <p class="section-description">
            La ortodoncia no solo mejora tu apariencia, también tiene múltiples beneficios 
            para tu salud bucal y general.
        </p>
        
        <div class="beneficios-grid">
            <?php 
            $iconos_beneficios = ['fa-smile', 'fa-spray-can-sparkles', 'fa-comment-medical', 'fa-shield-heart'];
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

    <!-- CUIDADOS DURANTE EL TRATAMIENTO -->
    <section class="cuidados-section">
        <h2 class="section-title">Cuidados Durante el Tratamiento</h2>
        <p class="section-description">
            Para garantizar el éxito de tu tratamiento ortodóntico, es importante seguir 
            estas recomendaciones:
        </p>
        
        <div class="cuidados-timeline">
            <?php 
            $iconos_cuidados = ['fa-utensils', 'fa-tooth', 'fa-calendar-check', 'fa-ring'];
            foreach ($servicio['cuidados'] as $index => $cuidado): 
            ?>
                <div class="cuidado-item">
                    <i class="fa-solid <?php echo $iconos_cuidados[$index]; ?>"></i>
                    <p><?php echo $cuidado; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- LLAMADO A LA ACCIÓN -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>¿Listo para transformar tu sonrisa?</h2>
            <p>
                Nuestro equipo profesional te acompañará durante todo el proceso, garantizando 
                un tratamiento personalizado que se adapte a tus necesidades y estilo de vida.
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