document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('#reserva-form');
    const modal = document.querySelector('#modal-confirmacion');
    const closeBtn = document.querySelector('.close');
    const btnConfirmar = document.querySelector('#btn-confirmar');
    const btnCancelar = document.querySelector('#btn-cancelar');

    if (!form || !modal) return;

    let datosReserva = {};

    // Manejar envío del formulario
    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const nombre = form.querySelector('[name="nombre"]').value.trim();
        const telefono = form.querySelector('[name="telefono"]').value.trim();
        const servicio = form.querySelector('[name="servicio"]').value;
        const fecha = form.querySelector('[name="fecha"]').value;
        const hora = form.querySelector('[name="hora"]').value;

        // Validar que todos los campos estén completos
        if (!nombre || !telefono || !servicio || !fecha || !hora) {
            alert('Por favor, complete todos los campos.');
            return;
        }

        // Verificar disponibilidad
        try {
            const formData = new FormData();
            formData.append('action', 'verificar');
            formData.append('fecha', fecha);
            formData.append('hora', hora);

            const response = await fetch('reservas.php', {
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            if (!data.disponible) {
                alert('Lo sentimos, ese horario ya está reservado. Por favor, elija otra fecha u hora.');
                return;
            }

            // Guardar datos para confirmar
            datosReserva = { nombre, telefono, servicio, fecha, hora };

            // Formatear fecha para mostrar
            const fechaFormateada = new Date(fecha + 'T00:00:00').toLocaleDateString('es-ES', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });

            // Mostrar modal de confirmación
            document.querySelector('#modal-nombre').textContent = nombre;
            document.querySelector('#modal-telefono').textContent = telefono;
            document.querySelector('#modal-servicio').textContent = servicio;
            document.querySelector('#modal-fecha').textContent = fechaFormateada;
            document.querySelector('#modal-hora').textContent = hora;

            modal.style.display = 'block';

        } catch (error) {
            console.error('Error al verificar disponibilidad:', error);
            alert('Error al verificar disponibilidad. Por favor, intente nuevamente.');
        }
    });

    // Confirmar reserva
    btnConfirmar.addEventListener('click', async () => {
        // Deshabilitar botón para evitar múltiples clics
        btnConfirmar.disabled = true;
        btnConfirmar.textContent = 'Procesando...';

        try {
            // Registrar en archivo txt
            const formData = new FormData();
            formData.append('action', 'registrar');
            formData.append('nombre', datosReserva.nombre);
            formData.append('telefono', datosReserva.telefono);
            formData.append('servicio', datosReserva.servicio);
            formData.append('fecha', datosReserva.fecha);
            formData.append('hora', datosReserva.hora);

            const response = await fetch('reservas.php', {
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            if (data.success) {
                // Enviar mensaje por WhatsApp
                const phone = form.dataset.whatsapp?.replace(/\D/g, '');
                
                if (phone) {
                    const fechaFormateada = new Date(datosReserva.fecha + 'T00:00:00').toLocaleDateString('es-ES', {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });

                    const text = encodeURIComponent(
                        `*RESERVA DE CITA*\n\n` +
                        `👤 *Nombre:* ${datosReserva.nombre}\n` +
                        `📞 *Teléfono:* ${datosReserva.telefono}\n` +
                        `🦷 *Servicio:* ${datosReserva.servicio}\n` +
                        `📅 *Fecha:* ${fechaFormateada}\n` +
                        `🕐 *Hora:* ${datosReserva.hora}\n\n` +
                        `Quiero confirmar mi cita. ¡Gracias!`
                    );

                    window.open(`https://wa.me/591${phone}?text=${text}`, '_blank', 'noopener');
                }

                // Cerrar modal y resetear formulario
                modal.style.display = 'none';
                form.reset();
                
                alert('¡Cita registrada exitosamente! Se abrirá WhatsApp para confirmar.');
                
                // Resetear botón
                btnConfirmar.disabled = false;
                btnConfirmar.textContent = 'Confirmar';
            } else {
                throw new Error('Error al registrar la cita');
            }

        } catch (error) {
            console.error('Error al registrar cita:', error);
            alert('Error al registrar la cita. Por favor, intente nuevamente.');
            
            // Resetear botón
            btnConfirmar.disabled = false;
            btnConfirmar.textContent = 'Confirmar';
        }
    });

    // Cancelar
    btnCancelar.addEventListener('click', () => {
        modal.style.display = 'none';
        datosReserva = {};
    });

    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
        datosReserva = {};
    });

    // Cerrar modal al hacer clic fuera
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
            datosReserva = {};
        }
    });

    // Establecer fecha mínima (hoy)
    const fechaInput = form.querySelector('[name="fecha"]');
    if (fechaInput) {
        const hoy = new Date().toISOString().split('T')[0];
        fechaInput.setAttribute('min', hoy);
    }
});