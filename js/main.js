$(function(){

  // Initialisation menu hamburger
  $(".button-collapse").sideNav({ closeOnClick: true });

  // Initialisation modal
  $('.modal').modal();

  // Initialisation collapsible
  $('.collapsible').collapsible();

  // Initialisation parallax
 // $('.parallax').parallax();

  // Initialisation Carousel
     $('.carousel').carousel();
     $('.carousel.carousel-slider').carousel({fullWidth: true});
    
  // Initialisation slider
      var headerHeight = $('header').height();
      console.log(headerHeight);
      $('.slider').slider({indicators:false, height:headerHeight});
  
  // Initialisation scrollSpy
  $('.scrollspy').scrollSpy({scrollOffset:30});
  
  //light box 
   $('.materialboxed').materialbox();
 // ScrollFire
 var options = [
 	 {selector: '#staggered1', offset: 0, callback: function(el) {  Materialize.showStaggeredList($(el)); }},
 	 {selector: '#staggered2', offset: 0, callback: function(el) {  Materialize.fadeInImage($(el)); }},
 	 {selector: '#staggered3', offset: 100, callback: function(el) {Materialize.showStaggeredList($(el)); }},
    {selector: '#product-line', offset: 100, callback: function(el) { Materialize.fadeInImage($(el)); } },
    {selector: '#card-img', offset: 100, callback: function(el) { Materialize.fadeInImage($(el)); } },
   // {selector: '#products2018-3', offset: 100, callback: function(el) { Materialize.fadeInImage($(el)); } },
  //  {selector: '#products2018-4', offset: 100, callback: function(el) { Materialize.fadeInImage($(el)); } },
    {selector: '#staggered5', offset: 100, callback: function(el) { Materialize.showStaggeredList($(el)); } },
    {selector: '#staggered4', offset: 100, callback: function(el) { Materialize.showStaggeredList($(el)); } },
      ];
  Materialize.scrollFire(options);
// Egalisation des hauteurs de cartes

// function getMaxHeights
// récupère la hauteur max des éléments cible
// prend en paramètre la cible
function getMaxHeights(target) {
    // création d'une variable de type tableau pour stocker les hauteurs
    let heights = [];
    // création d'une variable pour stocker la hauteur max
    let maxHeight;
    // récupère les hauteurs des éléments cible et les ajoute au tableau
    $(target).each(function() {
      heights.push($(this).outerHeight());
    })
    
    getMax(heights);
    // retourne la valeur de maxHeight
    return maxHeight;
  }
  
  // function getMax
  // détermine la hauteur max dans le tableau des hauteurs
  // prend en paramètre le tableau heights
  function getMax(arr) {
    // stockage de la hauteur max dans la variable maxHeight
    maxHeight = Math.max(...arr);
    // debug 
    //console.log(maxHeight);
  }
  
  // function setHeights
  // affecte à chaque élément cible la hauteur max
  function setHeight(target) {
    getMaxHeights(target);
    // si la taille de l'écran est > 600px
    if($(window).outerWidth() > 600) {
      $(target).each(function() {
        $(this).css('height', maxHeight);
      })
    }
  }
  
  setHeight(".card-height");


})
