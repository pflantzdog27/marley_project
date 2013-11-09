(function($){})(window.jQuery);
$(document).ready(function (){

    var $container = $('#isotopes-container');
    filters = {};
    $container.imagesLoaded( function(){
        $container.isotope({
            itemSelector : '.item',
            layoutMode : 'masonry',
            filter: '.overview',
            getSortData : {
                position : function ( $elem ) {
                    return $elem.attr('rel');
                }
            },
            sortBy : 'position'
        });
    });

    //filtering
    $('#sort-nav li a').click(function(e){
        var $this = $(this);
        if ( $this.hasClass('selected') ) {
            e.preventDefault();
            return;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
        var group = $optionSet.attr('data-filter-group');
        filters[ group ] = $this.attr('data-filter-value');
        var isoFilters = [];
        for ( var prop in filters ) {
            isoFilters.push( filters[ prop ] )
        }
        var selector = isoFilters.join('');
        $container.isotope({ filter: selector });
        return false;
    });

});
