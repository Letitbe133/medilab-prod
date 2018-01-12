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
  
	//scrollfire
 var options = [
        {
          selector: '#staggered1',
          offset: 0,
          callback: function(el) { Materialize.showStaggeredList($(el)); }
        },
      ];

  Materialize.scrollFire(options);

  // EasyAutocomplete setup
  var options = {
	url: "products.old",

	getValue: "name",

  placeholder: 'Search for a product',

  theme: "dark",

  highlightPhrase: true,

	list: {
		match: {
			enabled: true
		},
    sort: {
      enabled: true
    },

    showAnimation: {
  			type: "fade", //normal|slide|fade
  			time: 400,
  			callback: function() {}
  		},

  		hideAnimation: {
  			type: "fade", //normal|slide|fade
  			time: 400,
  			callback: function() {}
  		},

      onClickEvent: function(){
        var target = $("#search_bar").getSelectedItemData();
        var value = target.description + " " + target.type + " "+ target.conditionnement;
        $("#desc").val(value).trigger("change");
      }
	}
};

  $("#search_bar").easyAutocomplete(options);

})
