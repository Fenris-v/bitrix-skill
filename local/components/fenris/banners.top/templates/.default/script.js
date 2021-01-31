var speed = 3500;
var homeSlider = $('.home-slider').lightSlider({
    loop:true,
    speed: speed,
    pause: speed*1.5,
    item:1,
    auto:true,
    slideMargin:0,
    onBeforeStart:function($el) {
        $('.home-slider-conteiner #loader').remove();
        $('.home-slider-conteiner').append('<div id="loader" class="run-animation"/>');
    },
    onAfterSlide: function($el) {
        $('.home-slider-conteiner #loader').remove();
        $('.home-slider-conteiner').append('<div id="loader" class="run-animation"/>');
    }
});
