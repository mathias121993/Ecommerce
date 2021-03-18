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


  

  setInterval(function(){ contadorCarrito(contador); }, 200);
