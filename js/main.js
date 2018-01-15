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



})
