<?php
    define("TITLE", "Contactanos - El Tejido de Anita");
    include('includes/head.php');
    include('includes/menu.php');
    include('includes/checkout.php');
?>

<main>
    <section  class="contedor-producto-desktop">
        <article>
        <div class="producto-img">
            <img src="img/bombachon.jpg" alt="">
        </div>
        </article>
    
        <article>
            <h2>Lorem ipsum dolor sit.</h2>
            <h6 class="producto-precio">$5000</h6>
            <button onclick="carritoSumar()" class="producto-button">AGREGAR AL CARRITO</button>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias quos error modi aperiam laudantium repudiandae impedit illum ipsum voluptatem unde, voluptatum, aliquid ratione cum iste dignissimos! Sequi est, dicta totam mollitia assumenda nisi repellendus accusantium provident. Asperiores iusto nisi a.</p>
        </article>
    </section>
    <section class="contedor-producto">
        <h2>Lorem ipsum dolor sit.</h2>
        <div class="producto-img">
            <img src="img/bombachon.jpg" alt="">
        </div>
        <h6 class="producto-precio">$5000</h6>
        <button onclick="carritoSumar()" class="producto-button">AGREGAR AL CARRITO</button>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias quos error modi aperiam laudantium repudiandae impedit illum ipsum voluptatem unde, voluptatum, aliquid ratione cum iste dignissimos! Sequi est, dicta totam mollitia assumenda nisi repellendus accusantium provident. Asperiores iusto nisi a.</p>
    </section>
</main>

<?php
    include('includes/footer.php');
?>