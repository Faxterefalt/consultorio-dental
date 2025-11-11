<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?><?php echo isset($siteName) ? $siteName : 'SANDENT'; ?></title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="customer-support">
                    <i class="fa-solid fa-headset"></i>
                    <div class="content-customer-support">
                        <span class="text">CONSULTAS:</span>
                        <span class="number"><?php echo isset($phone) ? $phone : '73986206'; ?></span>
                    </div>
                </div>

                <div class="container-logo">
                    <h1><a href="index.php"><?php echo isset($siteName) ? $siteName : 'SANDENT'; ?></a></h1>
                </div>

                <div class="container-user">
                    <a href="reservas.php" class="btn-reserva">
                        <i class="fa-solid fa-calendar-check"></i>
                        <span>Reservar Cita</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars"></i>
                <ul class="menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="index.php#servicios">Servicios</a></li>
                    <li><a href="index.php#horarios">Horarios</a></li>
                    <li><a href="reservas.php">Reservas</a></li>
                </ul>
            </nav>
        </div>
    </header>