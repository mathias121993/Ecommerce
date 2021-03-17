// Funciones que abren y cierran el menú mobile (funciona similar a la del carrito)

contador = 0;

function contadorCarrito(contador) {
  var variable = document.getElementById("contador");
  variable.innerHTML = contador;
}

function carritoSumar() {
    contador ++;
}


function carritoRestar() {

  if(contador == 0){
    return
  }else{
    contador --;
  }
}


function openCloseNav(x) {
  x.classList.toggle("change");
  getWidthNav();
}

function getWidthNav(){
  if (document.getElementById("myNav").style.width == "100%"){
    closeNav();
    } else {
    openNav();
    closePopUp();
  }
}

function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

//Funciones que muestran el carrito con la menor cantidad de elementos posible 
function openCloseCart(){
  getWidthCart();
}

function getWidthCart(){
  if (document.getElementById("myCart").style.width == "20rem"){
    closePopUp();
    } else {
    openPopUp();
  }
}

function openPopUp(){
  document.getElementById("myCart").style.width = "20rem";
  document.getElementById("cart-img").style.transition = "background-image ease-in-out 0.8s";
  document.getElementById("cart-img").style.backgroundImage = "url('./img/icons/2024665-64.png')";
}

function closePopUp(){
  document.getElementById("myCart").style.width = "0%";
  document.getElementById("cart-img").style.transition = "background-image ease-in-out 0.8s";
  document.getElementById("cart-img").style.backgroundImage = "url('./img/icons/2024665-64 (1).png')";
}

// Nav en mobile e íconos de las redes sociales que se esconden al scrollear 
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("header").style.top = "0";
    document.getElementById("nav-desktop").style.top = "5rem";
    document.getElementById("aside-social-media").style.right = "1rem";
  } else {
    document.getElementById("header").style.top = "-15rem";
    document.getElementById("nav-desktop").style.top = "-15rem";
    document.getElementById("aside-social-media").style.right = "-8rem";
    closePopUp();
    closeNav();
  }
  prevScrollpos = currentScrollPos;
  }

  // Acordeón preguntas frecuentes
  function desplegarPregunta(y){
    y.classList.toggle("active");
    y.nextElementSibling.classList.toggle("mostrar");
    }

  setInterval(function(){ contadorCarrito(contador); }, 200);
