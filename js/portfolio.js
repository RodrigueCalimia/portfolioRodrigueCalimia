// On cible les éléments à modifier
var toggle = document.querySelector(".nav-toggle");
var nav    = document.querySelector(".nav-menu"); 
var page   = document.documentElement;

// La fonction permettant de basculer l'affichage en ajoutant/supprimant des classes
function doToggle() {
  this.classList.toggle('active');
  nav.classList.toggle('open');
  page.classList.toggle('noscroll');
}

// La fonction doToggle() est appelé lorsqu'on clique sur l'icone de menu
toggle.addEventListener('click', doToggle);

/* module de gestion de l'affichage de la zone CV */
var monCV = document.querySelector(".btn-cv");
var afficheCV    = document.querySelector(".cv"); 

function showCV() {
  afficheCV.classList.toggle('show');
}

monCV.addEventListener('click', showCV);

// rafraichissement de la page lors du mode responsive
var refresh = window.getElementById('menu-projets');
refresh.addEventListener('click', location.reload(), false);