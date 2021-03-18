<?php
    define("TITLE", "Inicio - El Tejido de Anita");
    include('includes/head.php');
    include('includes/menu.php');
    include('includes/checkout.php');
?>

    <main>
    <button onclick="carritoSumar()">sumar</button>
    <button onclick="carritoRestar()">restar</button>
    </main>
<?php
    include('includes/footer.php');
?>
