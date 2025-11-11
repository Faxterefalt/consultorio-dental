<?php

// Detectar si estamos en un subdirectorio
$isSubdir = strpos($_SERVER['PHP_SELF'], '/pages/') !== false;
$baseUrl = $isSubdir ? '../' : './';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' . $siteName : $siteName; ?></title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/styles.css">
</head>
<body>
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="customer-support">
                    <i class="fa-solid fa-headset"></i>
                    <div class="content-customer-support">
                        <span class="text">Atención al cliente</span>
                        <span class="number"><?php echo $phone; ?></span>
                    </div>
                </div>

                <div class="container-logo">
                    <i class="fa-solid fa-tooth"></i>
                    <h1 class="logo">
                        <a href="<?php echo $baseUrl; ?>index.php"><?php echo $siteName; ?></a>
                    </h1>
                </div>

                <a href="<?php echo $baseUrl; ?>reservas.php" class="btn-reserva">
                    <i class="fa-solid fa-calendar-check"></i>
                    Reservar Cita
                </a>
            </div>
        </div>

        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars"></i>
                <ul class="menu">
                    <li><a href="<?php echo $baseUrl; ?>index.php">Inicio</a></li>
                    <li><a href="<?php echo $baseUrl; ?>index.php#servicios">Servicios</a></li>
                    <li><a href="<?php echo $baseUrl; ?>index.php#horarios">Horarios</a></li>
                    <li><a href="<?php echo $baseUrl; ?>reservas.php">Reservar</a></li>
                </ul>
            </nav>
        </div>
    </header>