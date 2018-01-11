$(function(){

  // Initialisation menu hamburger
  $(".button-collapse").sideNav({
    closeOnClick: true
  });

  // Initialisation modal
  $('.modal').modal();

  // Initialisation collapsible
  $('.collapsible').collapsible();

  // Initialisation parallax
  $('.parallax').parallax();

  // Initialisation Carousel
      $(document).ready(function(){
      $('.carousel').carousel();
    });
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    
  // Initialisation slider
    $(document).ready(function(){
      $('.slider').slider();
    });
  
  // Initialisation scrollSpy
  $('.scrollspy').scrollSpy({scrollOffset:30});
  
	//scrollfire
 var options = [
     	 {selector: '#staggered1', offset: 0, callback: function(el) { Materialize.showStaggeredList($(el)); }},


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

  // mollecules display
  var jsonData = $.getJSON('products.json',function(data){
    //console.log(data);
    $(data.mollecule[0]).each(function(){
      var item = $(this)[0];
      console.log(item);
      $.each(item, function(k, v) {
        //console.log(k);
        $('#productsList').append(`<div class="collapsible-header">${k}</div>
        <div class=collapsible-body>
        test
        </div>
        `)
        // $('#productsList').append(`
        //   <div class='collapsible-header'> ${k} </div>
        //   <div class='collapsible-body'>
        //     <ul>
        //       <li>${v[0].name}</li>
        //     </ul>
        //   </div>
        //   `);
        $.each(v, function(){
          console.log(v[0].description);
        })
        //console.log(v[0].name);
      })
    })
    var betamethasone = $(data)[0]["mollecule"][0]['betamethasone'];
    //console.log(betamethasone.length);
    $(betamethasone).each(function(){
      var test = $(this)[0]['name'];
      //console.log(test);
      $('#betamethasone').append("<li>" + test + "<span class='right'>" + $(this)[0]['conditionnement'] + "</span></li>");
    })
  });


})
