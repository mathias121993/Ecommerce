<?php
    define("TITLE", "Nuetro Equipo - El Tejido de Anita");
    include('includes/head.php');
    include('includes/menu.php');
    include('includes/checkout.php');
?>

<main class="container-fluid">
		<section class="row text-center pt-5">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 px-0  mx-0 quienes-somos-img">
                <img src="img/cesto.jpeg" alt="" class="img-fluid w-50 ">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 mx-0 px-5 d-flex flex-column justify-content-center">
                <h2 class="fuente-nunito pt-5">¿Quienes Somos?</h2>
                <p class="mt-3" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni tempore molestiae molestias aut illum quam eius enim iure doloremque minus, ab facere adipisci! Sunt ex laboriosam recusandae delectus eveniet obcaecati?</p> 
            </div>
        </section>
        <section class="row text-sm-center text-md-center text-lg-start text-xl-start mx-auto pt-5">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex flex-column justify-content-center text-center">
                <h2 class="fuente-nunito">¿Donde nos encontramos?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, nesciunt?</p> 
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6  py-2">
                <div style="width: 100%" class="py-3"><iframe class="ubicacion mx-auto" width="100%" height="250rem"  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Les%20Rambles,%201%20Barcelona,%20Spain+(Mi%20nombre%20de%20egocios)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
            </div>
        </section>
	</main>

<?php
    include('includes/footer.php');
?>