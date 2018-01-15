$(function () {
    // function getMaxHeights
    // récupère la hauteur max des éléments cible
    // prend en paramètre la cible
    function getMaxHeights(target) {
        // création d'une variable de type tableau pour stocker les hauteurs
        let heights = [];
        // création d'une variable pour stocker la hauteur max
        let maxHeight;
        // récupère les hauteurs des éléments cible et les ajoute au tableau
        $(target).each(function () {
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
        if ($(window).outerWidth() > 600) {
            $(target).each(function () {
                $(this).css('height', maxHeight);
            })
        }
    }

    setHeight(".card-height");

})