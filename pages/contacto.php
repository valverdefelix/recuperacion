<?php include('../templates/cabecera.php');?>

<!--Cuerpo servicios-->
<section id="contact-us">
        <h1>Contáctanos</h1>
        <p>Estamos aquí para ayudarte. Puedes comunicarte con nosotros a través del formulario de contacto, nuestro correo electrónico, o nuestras redes sociales.</p>
        
        <h2>Formulario de Contacto</h2>
        <form id="contact-form">
            <label for="name">Nombre Completo:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="subject">Asunto:</label>
            <input type="text" id="subject" name="subject" required>
            
            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit">Enviar</button>
        </form>

        <h2>Otros Medios de Contacto</h2>
        <p><strong>Correo Electrónico:</strong> <a href="mailto:contacto@ejemplo.com">contacto@ejemplo.com</a></p>
        <p><strong>Teléfono:</strong> +1 (555) 123-4567</p>
        <p><strong>Dirección:</strong> 123 Calle Falsa, Ciudad, País</p>

        <h2>Síguenos en Nuestras Redes Sociales</h2>
        <div class="social-media">
            <a href="#" target="_blank">Facebook</a>
            <a href="#" target="_blank">Twitter</a>
            <a href="#" target="_blank">Instagram</a>
            <a href="#" target="_blank">LinkedIn</a>
        </div>

        <h2>Mapa de Ubicación</h2>
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1003.1711827070562!2d-98.96187908147925!3d19.36080875743127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1716763877958!5m2!1ses!2smx"  width="760" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <h2>Horario de Atención</h2>
        <p>Lunes a Viernes: 9:00 AM - 6:00 PM</p>
        <p>Sábado: 10:00 AM - 2:00 PM</p>
        <p>Domingo: Cerrado</p>

        <h2>Preguntas Frecuentes</h2>
        <p><a href="#">Enlace a la sección de FAQ</a></p>
    </section>

<?php include('../templates/pie.php');?>