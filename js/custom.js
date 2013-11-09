(function($){})(window.jQuery);
$(document).ready(function (){
    var containerWidth = $('.container').width();

    // on page refresh always go to top
    $(window).unload(function() {
        $('body').scrollTop(0);
    });

    // set elements to same size as width and height of browser
    $('#particle_canvas').attr('width',$(window).innerWidth());
    $('#particle_canvas').attr('height',$(window).innerHeight());
    $('#intro-screen').width($(window).width());
    $('#intro-screen').height($(window).height());


});

// ON LOAD
$(window).load(function() {
    var fadeIntroTime = 5000;
    // fadeout canvas animation after x seconds
    setInterval(function() {
        $('#particle_canvas').fadeOut(500,function(){
            $(this).remove();
        });
        return false;
    },fadeIntroTime);

    $('#marley-logo').delay(2000).animate({top: '15%',opacity : 1},3000,function() {

    });

})