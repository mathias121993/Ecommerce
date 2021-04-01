<?php
    define("TITLE", "Inicio - El Tejido de Anita");
    include('includes/head.php');
    include('includes/menu.php');
    include('includes/checkout.php');
?>

    <main>
    <!-- <button onclick="carritoSumar()">sumar</button>
    <button onclick="carritoRestar()">restar</button> -->

        <div class="carousel">
            <div class="ocultas animacion-carousel">
                <img src="https://concepto.de/wp-content/uploads/2015/03/paisaje-e1549600034372.jpg" style="height:100%;"> 
            </div>

            <div class="ocultas animacion-carousel">
                <img src="https://concepto.de/wp-content/uploads/2015/03/paisaje-e1549600034372.jpg" style="height:100%;">  
            </div>

            <div class="ocultas animacion-carousel">
                <img src="https://concepto.de/wp-content/uploads/2015/03/paisaje-e1549600034372.jpg" style= "height:100%;">
            </div>

            <!-- Botones que mueven el carousel -->
            <a class="carousel-anterior" onclick="cambioImagenCarousel(-1)">&#10094;</a>
            <a class="carousel-siguiente" onclick="cambioImagenCarousel(1)">&#10095;</a>
        </div>
        <br>

        <!-- puntos que switchean las img -->
        <div style="text-align:center">
            <span class="carousel-punto" onclick="imagenActualCarousel(1)"></span>
            <span class="carousel-punto" onclick="imagenActualCarousel(2)"></span>
            <span class="carousel-punto" onclick="imagenActualCarousel(3)"></span>
        </div>
        
    </main>
<?php
    include('includes/footer.php');
?>
