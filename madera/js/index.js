$(window).ready(function(){
    $('.forms').click(function(){
        $(this).submit();
    })
    $('.imgdestacado').click(function(){
        $(this).parent().submit();
    });
    
    $("a[rel=example_group]").fancybox({
        'transitionIn'		: 'none',
        'transitionOut'		: 'none',
        'titlePosition' 	: 'over',
        'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
            return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
        }
    });
    
});
    
    
    
