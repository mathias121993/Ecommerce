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