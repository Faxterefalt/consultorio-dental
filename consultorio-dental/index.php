<?php
// Configuración del sitio
$siteName = "SANDENT";
$phone = "73986206";
$address = "Km 7.5 calle chacarrera sobre la avenida Sacaba-Guadalupe";
$horario = "8:30am - 4:00pm";

// Servicios del consultorio
$servicios = [
    [
        'nombre' => 'Ortodoncia',
        'descripcion' => 'Alineación dental y corrección de mordida con tratamientos modernos.',
        'icono' => 'fa-teeth',
        'url' => './pages/ortodoncia.php'
    ],
    [
        'nombre' => 'Implantes Dentales',
        'descripcion' => 'Recupera tus piezas dentales perdidas con implantes seguros y duraderos.',
        'icono' => 'fa-tooth',
        'url' => './pages/implantesdentales.php'
    ],
    [
        'nombre' => 'Cirugía de Terceros Molares',
        'descripcion' => 'Extracción profesional de muelas del juicio con mínima molestia.',
        'icono' => 'fa-syringe',
        'url' => './pages/cirugia-terceros-molares.php'
    ],
    [
        'nombre' => 'Prótesis Fija y Removible',
        'descripcion' => 'Soluciones estéticas y funcionales para reemplazar dientes perdidos.',
        'icono' => 'fa-teeth-open',
        'url' => './pages/protesis.php'
    ],
    [
        'nombre' => 'Odontopediatría',
        'descripcion' => 'Atención odontológica especializada para niños y adolescentes.',
        'icono' => 'fa-baby',
        'url' => './pages/odontopediatria.php'
    ],
    [
        'nombre' => 'Endodoncia',
        'descripcion' => 'Tratamiento del nervio dental para conservar piezas naturales.',
        'icono' => 'fa-heartbeat',
        'url' => './pages/endodoncia.php'
    ],
    [
        'nombre' => 'Operatoria Dental',
        'descripcion' => 'Restauraciones estéticas y funcionales para dientes dañados por caries.',
        'icono' => 'fa-hand-holding-medical',
        'url' => './pages/operatoria.php'
    ]
];

// Características del consultorio
$features = [
    [
        'icono' => 'fa-shield-halved',
        'titulo' => 'Seguridad y Calidad',
        'descripcion' => 'Protocolos certificados'
    ],
    [
        'icono' => 'fa-user-doctor',
        'titulo' => 'Profesionales Expertos',
        'descripcion' => 'Equipo calificado'
    ],
    [
        'icono' => 'fa-award',
        'titulo' => 'Tecnología Moderna',
        'descripcion' => 'Equipamiento de última generación'
    ],
    [
        'icono' => 'fa-headset',
        'titulo' => 'Servicio al cliente 24/7',
        'descripcion' => 'LLAMAME ' . $phone
    ]
];

// Incluir header
include './header.php';
?>

<section class="banner">
    <div class="content-banner">
        <p>Consultorio Odontológico</p>
        <h2><?php echo $siteName; ?> <br />Tu Sonrisa, Nuestra Pasión</h2>
        <a href="reservas.php">Reservar Cita</a>
    </div>
</section>

<main class="main-content">
    <section class="container container-features">
        <?php foreach ($features as $feature): ?>
            <div class="card-feature">
                <i class="fa-solid <?php echo $feature['icono']; ?>"></i>
                <div class="feature-content">
                    <span><?php echo $feature['titulo']; ?></span>
                    <p><?php echo $feature['descripcion']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <section id="servicios" class="container top-products">
        <h1 class="heading-1">Nuestros Servicios</h1>
        
        <div class="container-products">
            <?php foreach ($servicios as $servicio): ?>
                <div class="card-product">
                    <div class="container-img">
                        <i class="fa-solid <?php echo $servicio['icono']; ?>"></i>
                    </div>
                    <div class="content-card-product">
                        <h3><?php echo $servicio['nombre']; ?></h3>
                        <p><?php echo $servicio['descripcion']; ?></p>
                        <a href="<?php echo $servicio['url']; ?>" class="add-cart">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="horarios" class="container specials">
        <h1 class="heading-1">Horarios de Atención</h1>
        <div class="container-features">
            <div class="card-feature">
                <i class="fa-solid fa-clock"></i>
                <div class="feature-content">
                    <span>Lunes a Viernes</span>
                    <p>8:30 AM - 4:00 PM</p>
                </div>
            </div>
            <div class="card-feature">
                <i class="fa-solid fa-calendar-days"></i>
                <div class="feature-content">
                    <span>Sábados</span>
                    <p>Previa cita</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container blogs">
        <h1 class="heading-1">Sobre Nosotros</h1>
        <div class="container-blogs">
            <div class="card-blog">
                <div class="container-img">
                    <i class="fa-solid fa-hospital"></i>
                </div>
                <div class="content-blog">
                    <h3>BIENVENIDOS A <?php echo $siteName; ?></h3>
                    <span>Tu sonrisa, nuestra pasión</span>
                    <p>
                        En <?php echo $siteName; ?>, nos especializamos en brindarte una atención odontológica integral 
                        con los más altos estándares de calidad, tecnología y calidez humana. 
                        Nuestro objetivo es cuidar tu salud bucal y ayudarte a lograr la sonrisa que siempre soñaste.
                    </p>
                </div>
            </div>
            <div class="card-blog">
                <div class="container-img">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="content-blog">
                    <h3>TU CONFIANZA, NUESTRO MAYOR LOGRO</h3>
                    <span><?php echo $siteName; ?></span>
                    <p>
                        Miles de sonrisas nos respaldan. En <?php echo $siteName; ?> trabajamos día a día para ser tu primera 
                        opción en salud dental. Agenda tu cita hoy y descubre por qué nuestros pacientes nos recomiendan.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include './footer.php'; ?>