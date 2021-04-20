<?php
    define("TITLE", "Contactanos - El Tejido de Anita");
    include('includes/head.php');
    include('includes/menu.php');
    include('includes/checkout.php');
?>

<main>
    <section id="formulario">
        <h2 style="text-align: center; font-family: 'Nunito', sans-serif;">¡Contactate con nosotros!</h2>

        <form action="form.php" method="GET" id="contact-form">

        <label for="name">Nombre: </label><input type="text" name="name" id="name-form" requested placeholder="Cosme Fulanito" minlength="4" spellcheck="false"> <!-- Nombres -->

        <label for="email">Email: </label><input type="email" name="email" id="email-form" requested placeholder="ejemplo@mail.com" spellcheck="false"> <!-- Email -->

        <label for="msg">Consulta: </label><textarea type="text" name="msg" id="msg-form" requested placeholder="¿En qué te podemos ayudar?" minlength="10" spellcheck="false"></textarea> <!-- Consulta -->

        <div><input type="checkbox" name="newsletter" id="checkbox-form"><label for="checkbox-form">¡Quiero recibir novedades!</label></div> <!-- Checkbox newsletter -->

        <input type="submit" name="contact-submit" value="Enviar" id="boton-enviar"> <!-- Botón ENVIAR -->

        </form>
    </section>
</main>

<?php
    include('includes/footer.php');
?>