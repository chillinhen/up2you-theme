jQuery(document).ready(function ($) {
    //alert('hallo');
    //remove clutter
    $('.opening br, .contact-data br').remove();
    $('#menu-meta a').each(function () {
        $(this).wrapInner('<span></span>');
    });
    //external icons
    $('a').filter(function () {
        return this.hostname && this.hostname !== location.hostname;
    }).append(' <i class="fa fa-external-link"></i>').attr('target', '_blank');

    //elastic iframes
    $('iframe')
            .wrap('<div class="iframe-elastic"></div>')
            .attr('id','#map');

    //enable pointer events by clicking on parent
    $('.iframe-elastic').click(function () {
        $('#map,.gm-style').css('pointer-events', 'all');
    });
      // you want to disable pointer events when the mouse leave the canvas area;
    $("#map").mouseleave(function () {
        $('#map').css('pointer-events', 'none'); // set the pointer events to none when mouse leaves the map area
    });
//    $('.buttongroup a').addClass('button');
//    
//    //little shop layout tweaking
//    $('body.woocommerce-page .content-area').addClass('col-full');
//    
//    //tabbed Content - stories
//    $("ul#tabs li:first-child, ul#tab li:first-child").addClass('active');
//    $("ul#tabs li").click(function(){
//        if (!$(this).hasClass("active")) {
//            var tabNum = $(this).index();
//            var nthChild = tabNum+1;
//            $("ul#tabs li.active").removeClass("active");
//            $(this).addClass("active");
//            $("ul#tab li.active").removeClass("active");
//            $("ul#tab li:nth-child("+nthChild+")").addClass("active");
//        }
//    });
//    // some style tweaking
//    if ($("#tabbed li").length) {
//        $('ul#tabs, ul#tab').addClass('style');
//    }

});

