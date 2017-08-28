(function ($, Drupal, window, document, undefined) {


// Place your code here.
//document.write("У Вас включён JavaScript!");
//alert("РАБОТАЕТ")

//Фоточки
$(document).ready(function(){

    baguetteBox.run('.BaguetteBox', {
        captions: function(element) {
            return element.getElementsByTagName('img')[0].alt;
        }
    });

        $('.menu-mlid-238 a').html('Домой');
        
	
});

//слайдер
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide", //Тип анимации, "fade" или "slide"
    slideshowSpeed: 3500,
    easing: "swing",
    pauseOnHover: true, //Остановка слайдера при наведении на него
    useCSS: true, //Использование CSS3 переходов, если они имеются
    touch: true, //Разрешить навигацию по сенсеру, удобно на смартфонах и планшетах.
    pausePlay: false, //Создание динамического pause/play элемента
    animationLoop: true, // Цикличность анимации. Если false, directionNav будет добавлять класс "disable" на обоих концах слайдера
    animationSpeed: 1200,  //Скорость анимации в мс
    // https://daruse.ru/flexslider - настройки
  });
});


//табы
$(document).ready(function() {
  $('.tabs-nav li').click(function(e) {
    var a = $(this),
        parent = a.parents('.tabs'),
        nav = parent.children('.tabs-nav').children('li'),
        box = parent.children('.tabs-box').children('div');

    if (!a.hasClass('active')) {
      a.addClass('active')
        .siblings().removeClass('active');
   
      box.eq(a.index()).addClass('active')
        .siblings().removeClass('active');
    }
   
    e.preventDefault();
  });
});//end tab


//меню
$(document).ready(function() {
  $('.menu-trigger').click(function() {
    $('nav ul').slideToggle(300);
      return false;
  });//end slide toggle

  $(window).resize(function() {     
        if (  $(window).width() > 500 ) {           
            $('nav ul').removeAttr('style');
         }
    });//end resize
});//end ready


//Кнопка наверх
$(function() {
  $(window).scroll(function() {
    if($(this).scrollTop() > 800) {
      $('#toTop').fadeIn(); 
    } else {
      $('#toTop').fadeOut();
    }
  });
 
  $('#toTop').click(function() {
    $('body,html').animate({scrollTop:0},400);
  }); 
});//Кнопка наверх END



})(jQuery, Drupal, this, this.document);