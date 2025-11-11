<?php
$pageTitle = "Reservar Cita";
$siteName = "SANDENT";
$phone = "73986206";

include './header.php';
?>

<section id="consulta" class="form-section container">
    <h2>Formulario de Consulta</h2>
    <form action="#" method="post">
        <label>Nombre completo:</label>
        <input type="text" name="nombre" required>

        <label>Correo electrónico:</label>
        <input type="email" name="email" required>

        <label>Mensaje o consulta:</label>
        <textarea name="mensaje" rows="5" required></textarea>

        <button type="submit">Enviar Consulta</button>
    </form>
</section>

<section id="reserva" class="form-section container">
    <h2>Reservar Cita</h2>
    <form action="#" method="post">
        <label>Nombre completo:</label>
        <input type="text" name="nombre" required>

        <label>Teléfono:</label>
        <input type="tel" name="telefono" required>

        <label>Servicio a realizar:</label>
        <select name="servicio" required>
            <option value="">Seleccione un servicio</option>
            <option value="Ortodoncia">Ortodoncia</option>
            <option value="Implantes Dentales">Implantes Dentales</option>
            <option value="Cirugía de Terceros Molares">Cirugía de Terceros Molares</option>
            <option value="Endodoncia">Endodoncia</option>
        </select>

        <label>Fecha de la cita:</label>
        <input type="date" name="fecha" required>

        <label>Hora:</label>
        <input type="time" name="hora" required>

        <button type="submit">Reservar Cita</button>
    </form>
</section>

<?php include './footer.php'; ?>