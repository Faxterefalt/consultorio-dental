document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('#consulta-form');
    if (!form) return;

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const name = form.querySelector('[name="nombre"]').value.trim();
        const email = form.querySelector('[name="email"]').value.trim();
        const message = form.querySelector('[name="mensaje"]').value.trim();
        const phone = form.dataset.whatsapp?.replace(/\D/g, '');

        if (!phone) {
            console.error('Número de WhatsApp no configurado.');
            return;
        }

        const text = encodeURIComponent(
            `Hola, soy ${name}.\nCorreo: ${email}\nMensaje: ${message}`
        );

        window.open(`https://wa.me/${phone}?text=${text}`, '_blank', 'noopener');
    });
});