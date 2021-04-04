<?php
    define("TITLE", "Inicio - El Tejido de Anita");
    include('includes/head.php');
    include('includes/menu.php');
    include('includes/checkout.php');
?>

    <main>
    <!-- <button onclick="carritoSumar()">sumar</button>
    <button onclick="carritoRestar()">restar</button> -->
        <section>
            <div class="carousel">
                <div class="img-carousel-ocultas animacion-carousel uno">
                    <!-- <img src="https://concepto.de/wp-content/uploads/2015/03/paisaje-e1549600034372.jpg" style="height:100%;">  -->
                </div>

                <div class="img-carousel-ocultas animacion-carousel dos">
                    <!-- <img src="https://1.bp.blogspot.com/-JREhSKN8sMM/VmH2B-jmFXI/AAAAAAAAIzg/ScNtA185M88/s1600/02273%2Bpaisajes01.jpg" style="height:100%;">   -->
                </div>

                <div class="img-carousel-ocultas animacion-carousel tres">
                    <!-- <img src="https://www.blogartesvisuales.net/wp-content/uploads/2008/07/fotografia-paisaje-01.jpg" style= "height:100%;"> -->
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
        </section>

        <section class="productos-destacados-varios">
            <div class="producto-destacado">
                <img src="img/loboapego.jpeg" alt="Lobo Apego">
                <h3>Lobo Apego</h3>
                <p>$500</p>
            </div>

            <div class="producto-destacado">
                <img src="img/cesto.jpeg" alt="Cesto">
                <h3>Cesto</h3>
                <p>$450</p>
            </div>

            <div class="producto-destacado">
                <img src="img/chaleco2.jpeg" alt="Chaleco">
                <h3>Chaleco</h3>
                <p>A partir de $1400</p>
            </div>

            <div class="producto-destacado">
                <img src="img/bombachon.jpg" alt="Bombachon">
                <h3>Bombachón</h3>
                <p>A partir de $1250</p>
            </div>
        </section>

        <section class="categorias-productos">
            <a href="#">
                <img src="img/icons/categorias/5026435-64.png" alt="Indumentaria">
                <p>Indumentaria</p>
            </a>
            <a href="#">
                <img src="img/icons/categorias/3844470-64.png" alt="Decoración">
                <p>Decoración</p>
            </a>
            <a href="#">
                <img src="img/icons/categorias/1912795-64.png" alt="Accesorios">
                <p>Accesorios</p>
            </a>
            <a href="#">
                <img src="img/icons/categorias/6588572-64.png" alt="Muñecos Apego">
                <p>Muñecos Apego</p>
            </a>
        </section>

        <section class="newsletter">
            <div>
                <p>¡Suscribite a nuestro newsletter y obtené un descuento del 10%!</p>
            </div>
            <div>
                <input type="email" name="email-newsletter" id="email-newsletter" placeholder="anita@gmail.com">
                <input type="submit" id="boton-newsletter" value="Enviar cupón">
            </div>
        </section>
    </main>
<?php
    include('includes/footer.php');
?>
