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
