<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <!-----Styles-------->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/producto.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/carrito.css">
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/equipo.css">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/contacto.css">
    <!-----GoogleFonts-------->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-----Bootstrap-------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <header id="header">
      <div id="nav-mobile">
        <h4>MENÚ</h4>
        <div class="container" onclick="openCloseNav(this)">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
      </div>

      <a href="./index.php"><div id="oveja-nav"><img src="./img/oveja.png" alt="Oveja del logo"></div></a>

      <input type="search" name="searchbar" id="searchbar" placeholder="Buscar producto...">

      <div id="cart-icon" onclick="openCloseCart()">

        <div id="cart-img"></div>
        <div id="contador-cart"><p id="contador" ></p></div>
    </header>

    <div id="aside-social-media">
      <a href="#"><img src="./img/icons/instagram_2142569.png" alt="Instagram"></a>
      <a href="#"><img src="./img/icons/facebook__317752.png" alt="Facebook"></a>
      <a href="#"><img src="./img/icons/whatsapp_4017334.png" alt="Whatsapp"></a>
    </div>