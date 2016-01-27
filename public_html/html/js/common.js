new WOW().init();

jQuery.fn.extend({
    scrollTo: function (speed, easing) {
        return this.each(function () {
            var targetOffset = $(this).offset().top;
            $('html,body').animate({scrollTop: targetOffset}, speed, easing);
        });
    }
});

$(function () {
    $('#menu-toggle').sidr({
        name: 'sidr',
        speed: 200,
        side: 'left',
        source: null,
        renaming: true,
        body: 'body'
    });
    //
    $(document).on('click', function (e) {
        var container = $('#sidr');
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $.sidr('close', 'sidr');
        }
    });
    //
    $(window).bind('resize', function () {
        if ($('body').hasClass('sidr-open') && $(window).width() >= 768) {
            $.sidr('close');
        }
    });
    //
    $('.sub-menu-sidr').hide();

    $("#sidr li").on('click', function () {
        $("ul", this).toggle('fast');
    });
});

$(function () {
    $('.accordion-toggle').on('click', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            $('.accordion-toggle').removeClass('selected');
            $(this).addClass('selected');
            $(".collapse.in").collapse('hide');
        }
    });
});

$(function () {
    $('.navbar-oil').affix({
        offset: {
            top: $('header').height()
        }
    });
});

function mouse_enter_map() {
    $('.map iframe').css("pointer-events", "auto");
}
$(function () {
    $(".map").on('mouseenter', function () {
        setTimeout(mouse_enter_map, 500);
    });
    $(".map").on('mouseleave', function () {
        $('.map iframe').css("pointer-events", "none");
    });
});

/*--------------------------------------------------------------------- jssor */
var jssor_last_project_ids;
var jssor_last_project = function (jssor_id) {
    'use strict';
    if ($('#' + jssor_id).length > 0) {
        //slider project [start]
        var jssor_options = {
            $AutoPlay: true,
            $AutoPlaySteps: 1,
            $SlideDuration: 160,
            $SlideWidth: 400,
            $SlideSpacing: 0,
            $Cols: 4,
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            }
        };

        var jssor_slider = new $JssorSlider$(jssor_id, jssor_options);
        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizing
        var ScaleSliderLastProject = function () {
            var refSize = jssor_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 1920);
                jssor_slider.$ScaleWidth(refSize);
            } else {
                window.setTimeout(ScaleSliderLastProject, 30);
            }
        };
        ScaleSliderLastProject();
        $(window).bind("load", ScaleSliderLastProject);
        $(window).bind("resize", ScaleSliderLastProject);
        $(window).bind("orientationchange", ScaleSliderLastProject);
        //option end
    }
};

jQuery(document).ready(function ($) {
    if ($('#slider1_container').length > 0) {
        //slider top [start]
        var _SlideshowTransitions = [
            {$Duration: 1200, $Opacity: 2}
        ];

        var options = {
            $AutoPlay: true, //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlaySteps: 1, //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
            $AutoPlayInterval: 3000, //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1, //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $ArrowKeyNavigation: true, //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideEasing: $JssorEasing$.$EaseOutQuint, //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
            $SlideDuration: 800, //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20, //[Optional] Minimum drag offset to trigger slide , default value is 20
            //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 0, //[Optional] Space between each slide in pixels, default value is 0
            $DisplayPieces: 1, //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $ParkingPosition: 0, //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
            $UISearchMode: 1, //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation: 1, //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 1, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

            $SlideshowOptions: {//[Optional] Options to specify and enable slideshow or not
                $Class: $JssorSlideshowRunner$, //[Required] Class to create instance of slideshow
                $Transitions: _SlideshowTransitions, //[Required] An array of slideshow transitions to play slideshow
                $TransitionsOrder: 1, //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
            },
            $ArrowNavigatorOptions: {//[Optional] Options to specify and enable arrow navigator or not
                $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 2, //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1, //[Optional] Steps to go for each navigation request, default value is 1
                $Scale: false                                   //Scales bullets navigator or not while slider scale
            },
            $BulletNavigatorOptions: {//[Optional] Options to specify and enable navigator or not
                $Class: $JssorBulletNavigator$, //[Required] Class to create navigator instance
                $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 1, //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1, //[Optional] Steps to go for each navigation request, default value is 1
                $Lanes: 1, //[Optional] Specify lanes to arrange items, default value is 1
                $SpacingX: 12, //[Optional] Horizontal space between each item in pixel, default value is 0
                $SpacingY: 4, //[Optional] Vertical space between each item in pixel, default value is 0
                $Orientation: 1, //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                $Scale: false                                   //Scales bullets navigator or not while slider scale
            }
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var refSize = jssor_slider1.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 1920);
                jssor_slider1.$ScaleWidth(refSize);
            } else {
                window.setTimeout(ScaleSlider, 0);
            }
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
        //slider top [end]
    }

    if ($('#jssor_info').length > 0) {
        var jssor_info_options = {
            $AutoPlay: true,
            $SlideDuration: 800,
            $SlideEasing: $Jease$.$OutQuint,
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_info_slider = new $JssorSlider$("jssor_info", jssor_info_options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizing
        function ScaleSlider_jssor_info() {
            var refSize = jssor_info_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 1920);
                jssor_info_slider.$ScaleWidth(refSize);
            } else {
                window.setTimeout(ScaleSlider_jssor_info, 30);
            }
        }
        ScaleSlider_jssor_info();
        $(window).bind("load", ScaleSlider_jssor_info);
        $(window).bind("resize", ScaleSlider_jssor_info);
        $(window).bind("orientationchange", ScaleSlider_jssor_info);
        //responsive code end
    }
});
/* ---------------------------------------------------------------- jssor end */
$(function () {
    $("#tabs").tabs();
//    $("#tabs-design").tabs();
});
/* -------------------------------------------------- product carousel slider */
$(function () {
//    $('#myCarousel').carousel({
//        interval: 10000
//    });

//    $('.carousel .item').each(function () {
//        var next = $(this).next();
//        if (!next.length) {
//            next = $(this).siblings(':first');
//        }
//        next.children(':first-child').clone().appendTo($(this));
//
//        if (next.next().length > 0) {
//            next.next().children(':first-child').clone().appendTo($(this));
//        } else {
//            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
//        }
//    });

});

/* -------------------------------------------------------------- back to top */
$(function ($) {
    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
            //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
            offset_opacity = 1200,
            $back_to_top = $('#back-top');
    //
    $(window).scroll(function () {
        ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if ($(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('cd-fade-out');
        }
    });
    //
    $back_to_top.on('click', function () {
        $('#header').scrollTo();
    });
});

//$(function () {
//    $('.ul-diff > li').click(function () {
//        $(this).addClass('selected').siblings().removeClass('selected');
//        $('.ul-diff > li article.item').each(function () {
//            $(this).removeClass('selected');
//        });
//        //
//        $('article.item', this).addClass('selected');
//    });
//});

//$(document).ready(function () {
//    $('.img-tab').click(function () {
//        $('.item-title').parent().find('.item-title').css('display', 'none');
//        var Id = $(this).attr('id');
//        var tabId = 'item-' + Id;
//        $('#' + tabId).parent().find('.item-title').css('display', 'inline');
//    });
//});