// Funciones que abren y cierran el menú mobile (funciona similar a la del carrito)


localStorage.myItem;
console.log(localStorage.myItem)

function createMyItem(){
  if(localStorage.myItem){
    return
  }else{
    localStorage.setItem("myItem",0);
  }
}

function contadorCarrito(contador) {
  console.log(contador);
  var variable = document.getElementById("contador");
  variable.innerHTML = contador;
}

function carritoSumar() {
  localStorage.myItem ++;
   
}


function carritoRestar() {

  if(localStorage.myItem == 0){
    return
  }else{
    localStorage.myItem --;
  }
}


  
createMyItem();
setInterval(function(){ contadorCarrito(localStorage.myItem); }, 200);
