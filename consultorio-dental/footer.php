<?php

$isSubdir = strpos($_SERVER['PHP_SELF'], '/pages/') !== false;
$baseUrl = $isSubdir ? '../' : './';
?>
    <footer class="footer">
        <div class="container container-footer">
            <div class="menu-footer">
                <div class="contact-info">
                    <p class="title-footer">Información de Contacto</p>
                    <ul>
                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <?php echo $address; ?>
                        </li>
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <?php echo $phone; ?>
                        </li>
                        <li>
                            <i class="fa-solid fa-clock"></i>
                            <?php echo $horario; ?>
                        </li>
                    </ul>

                    <div class="social-icons">
                        <span class="facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </span>
                        <span class="instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </span>
                    </div>
                </div>

                <div class="information">
                    <p class="title-footer">Información</p>
                    <ul>
                        <li><a href="<?php echo $baseUrl; ?>index.php">Inicio</a></li>
                        <li><a href="<?php echo $baseUrl; ?>index.php#servicios">Servicios</a></li>
                        <li><a href="<?php echo $baseUrl; ?>index.php#horarios">Horarios</a></li>
                        <li><a href="<?php echo $baseUrl; ?>reservas.php">Reservar Cita</a></li>
                    </ul>
                </div>


            </div>

            <div class="copyright">
                <p>© 2025 Jhannet Gallardo - Todos los derechos reservados</p>
            </div>
        </div>
    </footer>
</body>
</html>