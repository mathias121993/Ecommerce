<?php
    define("TITLE", "Preguntas Frecuentes - El Tejido de Anita");
    include('includes/head.php');
    include('includes/menu.php');
    include('includes/checkout.php');
?>

<main>
    <section id="faq">
        <button class="boton-acordeon" onclick="desplegarPregunta(this)">Pregunta 1</button>
        <div class="respuesta-acordeon">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <button class="boton-acordeon" onclick="desplegarPregunta(this)">Pregunta 2</button>
        <div class="respuesta-acordeon">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <button class="boton-acordeon" onclick="desplegarPregunta(this)">Pregunta 3</button>
        <div class="respuesta-acordeon">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </section>
</main>

<?php
    include('includes/footer.php');
?>