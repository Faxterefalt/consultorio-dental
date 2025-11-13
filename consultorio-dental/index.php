<?php

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

// Imágenes de la galería
$galeria = [
    [
        'imagen' => './assets/img/antesydespués.jpg',
        'titulo' => 'Transformaciones Increíbles',
        'descripcion' => 'Resultados que hablan por sí solos'
    ],
    [
        'imagen' => './assets/img/consultorio-trabajo.jpg',
        'titulo' => 'Profesionales en Acción',
        'descripcion' => 'Precisión y cuidado en cada procedimiento'
    ],
    [
        'imagen' => './assets/img/cuidado.jpg',
        'titulo' => 'Tu Sonrisa Importa',
        'descripcion' => 'Atención personalizada y profesional'
    ],
    [
        'imagen' => './assets/img/estética.jpg',
        'titulo' => 'Sonrisas Perfectas',
        'descripcion' => 'Resultados naturales y hermosos'
    ],
    [
        'imagen' => './assets/img/implantes.jpg',
        'titulo' => 'Implantes Dentales',
        'descripcion' => 'Tecnología de última generación'
    ],
    [
        'imagen' => './assets/img/operatoria.jpg',
        'titulo' => 'Equipo Profesional',
        'descripcion' => 'Experiencia y dedicación'
    ],
    [
        'imagen' => './assets/img/presentacion.png',
        'titulo' => 'Nuestro Equipo',
        'descripcion' => 'Comprometidos con tu salud dental'
    ],
    [
        'imagen' => './assets/img/instalaciones.png',
        'titulo' => 'Instalaciones Modernas',
        'descripcion' => 'Comodidad y tecnología'
    ]
];

// Incluir header
include './header.php';
?>

<!-- Agregar el CSS de la galería -->
<link rel="stylesheet" href="./assets/css/gallery.css">

<section class="banner">
    <video class="banner-video" autoplay muted loop playsinline>
        <source src="./assets/img/dentist.mp4" type="video/mp4">
        Tu navegador no soporta el elemento de video.
    </video>
    <div class="banner-overlay"></div>
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

        <!-- GALERÍA MODERNA -->
        <div class="gallery-section">
            <h2 class="heading-1">Nuestra Galería</h2>
            <div class="gallery-container container">
                <?php foreach ($galeria as $index => $foto): ?>
                    <div class="gallery-item" onclick="openLightbox(<?php echo $index; ?>)">
                        <img src="<?php echo $foto['imagen']; ?>" alt="<?php echo $foto['titulo']; ?>">
                        <div class="gallery-icon">
                            <i class="fa-solid fa-search-plus"></i>
                        </div>
                        <div class="gallery-overlay">
                            <h4><?php echo $foto['titulo']; ?></h4>
                            <p><?php echo $foto['descripcion']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<!-- Lightbox Modal -->
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
    <div class="lightbox-content" onclick="event.stopPropagation()">
        <button class="lightbox-close" onclick="closeLightbox()">&times;</button>
        <button class="lightbox-nav lightbox-prev" onclick="changeImage(-1)">&#10094;</button>
        <img id="lightbox-img" src="" alt="">
        <button class="lightbox-nav lightbox-next" onclick="changeImage(1)">&#10095;</button>
    </div>
</div>

<script>
    const galleryImages = <?php echo json_encode($galeria); ?>;
    let currentImageIndex = 0;

    function openLightbox(index) {
        currentImageIndex = index;
        const lightbox = document.getElementById('lightbox');
        const img = document.getElementById('lightbox-img');
        img.src = galleryImages[index].imagen;
        img.alt = galleryImages[index].titulo;
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        const lightbox = document.getElementById('lightbox');
        lightbox.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    function changeImage(direction) {
        currentImageIndex += direction;
        if (currentImageIndex < 0) {
            currentImageIndex = galleryImages.length - 1;
        } else if (currentImageIndex >= galleryImages.length) {
            currentImageIndex = 0;
        }
        const img = document.getElementById('lightbox-img');
        img.src = galleryImages[currentImageIndex].imagen;
        img.alt = galleryImages[currentImageIndex].titulo;
    }

    // Cerrar con tecla ESC
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeLightbox();
        } else if (event.key === 'ArrowLeft') {
            changeImage(-1);
        } else if (event.key === 'ArrowRight') {
            changeImage(1);
        }
    });
</script>

<?php include './footer.php'; ?>