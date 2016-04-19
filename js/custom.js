jQuery(document).ready(function ($) {
    //alert('hallo');
    //
        checkSize();

    // run test on resize of the window
    $(window).resize(checkSize);
    //some tweaks for smaller windowa

    function checkSize() {
        if ($(".navbar-toggle").css("display") == "block") {
            //Navbar tweaks
//            $('.navbar-toggle').click(function () {
//                $('nav#main-nav').toggleClass('open').removeClass('closed');
//
//            });
            }
    }

    //remove clutter
    $('.opening br, .contact-data br, .single-programme h1 br').remove();
    $('.meta-menu a').each(function () {
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
    
    // Header/Banner tweaking
    var gap = $('.header .top.fixed').height();
    if ($("#banner").length) {
        $('#banner').css('margin-top',gap * 1);
    } else {
        $('#page header.header').css('margin-bottom',gap * 1);
    }
    
    if ($("#banner").length || $('.full-size-bar')) {
        $('.site-main').css('border','0');
    }
    
        //tabbed Content - stories
    $("ul#tabs li:first-child, ul#tab li:first-child").addClass('active');
    $("ul#tabs li").click(function(){
        if (!$(this).hasClass("active")) {
            var tabNum = $(this).index();
            var nthChild = tabNum+1;
            $("ul#tabs li.active").removeClass("active");
            $(this).addClass("active");
            $("ul#tab li.active").removeClass("active");
            $("ul#tab li:nth-child("+nthChild+")").addClass("active");
        }
    });
    // some style tweaking
    if ($("#tabbed li").length) {
        $('ul#tabs, ul#tab').addClass('style');
    }

    // scroll-to-top
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.scroll-to-top').fadeIn();
        } else {
            jQuery('.scroll-to-top').fadeOut();
        }
    });

    //Click event to scroll to top
    jQuery('.scroll-to-top').click(function () {
        jQuery('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
    
    //smooth scrolling for 
    
    $('a#scroll-to').on('click', function (e) {
         e.preventDefault();

         var target = this.hash,
             $target = $(target);

         $('html, body').stop().animate({
             'scrollTop': $target.offset().top - 80
         }, 800, function () {
             window.location.hash = target;
         });
     });
});


