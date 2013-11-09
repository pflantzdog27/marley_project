(function($){})(window.jQuery);
$(document).ready(function (){

    // on page refresh always go to top
    $(window).unload(function() {
        $('body').scrollTop(0);
    });

    // beauty images
    $('body').css('overflow','hidden');
    randomBeautyImage()

    // set elements to correct width and/or height before load
    $('#particle_canvas').attr('width',$(window).innerWidth()).attr('height',$(window).innerHeight());
    $('#intro-screen').width($(window).width()).height($(window).height());
    $('body').height($(window).height());
    $('#wrapper').css('min-height',$(window).height());
    $('#marley-logo').width($('.logo').width()).height($('.logo').height());

    // navigation dropdown
    $('.dropdown').hover(function() {
        $(this).children('.dropdown-menu').stop().slideDown(100);
    },function() {
        $(this).children('.dropdown-menu').slideUp(100);
    });

});

// ON LOAD
$(window).load(function() {
    // intro screen
    var fadeIntroTime = 5000;
    $('#marley-logo').delay(2000).animate({top: '125px',opacity : 1},3000,function() {
        $('#particle_canvas').fadeOut(1000,function(){
            $(this).remove();
        });
        $('#down-arrow').fadeIn(500,function() {
            $(this).animate({'background-position-y': '105%'}, 2000,function() {
                $(this).click(function() {
                    $('body').css({'overflow-y':'auto', 'overflow-x': 'hidden', height : 'auto'}).scrollTo($('#wrapper'),1000);
                })

            });
        });
    });
})

// SCROLL
$(window).scroll(function() {
    var distance = $('#wrapper').offset().top;
    if ( $(window).scrollTop() >= distance ) {
        $('#navigation-wrap').addClass('fixed-position');
        $('#wrapper > .container').css('padding-top','110px');
        $('.logo').css('visibility','visible');
        $('#marley-logo').css('visibility','hidden');
    } else {
        $('#navigation-wrap').removeClass('fixed-position');
        $('.logo').css('visibility','hidden');
        $('#marley-logo').css('visibility','visible');
        $('#wrapper > .container').css('padding-top','0');
    }
});

// FUNCTIONS
function randomBeautyImage() {
    var images = ['intro_screen_A.jpg', 'intro_screen_B.jpg', 'intro_screen_C.jpg', 'intro_screen_D.jpg'];
    var lottoWinner = Math.floor(Math.random() * images.length);
    $('#intro-screen').css({'background-image': 'url(images/' + images[lottoWinner] + ')'});
};

