<footer class="footer">
    <div class="container container-footer">
        <div class="menu-footer">
            <div class="contact-info">
                <p class="title-footer">Información de Contacto</p>
                <ul>
                    <li><i class="fa-solid fa-location-dot"></i> <?php echo isset($address) ? $address : 'Km 7.5 calle chacarrera sobre la avenida Sacaba-Guadalupe'; ?></li>
                    <li><i class="fa-solid fa-phone"></i> Teléfono: <?php echo isset($phone) ? $phone : '73986206'; ?></li>
                    <li><i class="fa-solid fa-clock"></i> Horarios: <?php echo isset($horario) ? $horario : '8:30am - 4:00pm'; ?></li>
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
                <p class="title-footer">Enlaces Rápidos</p>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="index.php#servicios">Servicios</a></li>
                    <li><a href="reservas.php">Reservar Cita</a></li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> SANDENT - Todos los derechos reservados</p>
        </div>
    </div>
</footer>

<script src="./assets/js/main.js"></script>
</body>
</html>