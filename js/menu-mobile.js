// Abre y cierra el menú para mobile
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
  