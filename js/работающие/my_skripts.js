(function ($, Drupal, window, document, undefined) {


// Place your code here.
//document.write("У Вас включён JavaScript!");
//alert("РАБОТАЕТ")



$(document).ready(function(){


$('.li-field-img-foto img').matchHeight({
    property: 'height'
});

$.fn.matchHeight._update()

});



    $(document).ready(function() {
        $('.ul-field-img-fot').pgwSlider({
            autoSlide: false,
            displayControls: true
        });
    });

})(jQuery, Drupal, this, this.document);