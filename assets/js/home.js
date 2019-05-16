// Smooth Scrolling: Smooth scrolls to an ID on the current page.
$(function() {
    $('.navbar a, .scroll-down a, .cta-quote a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Activates floating label headings for the contact form.
$(function() {
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !! $(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
    });
});

// Fix for Bootstrap Modal Shifting Page Contents
$(window).on("load resize",function(e){
    (function(e) {
        var $winWidth = e(window).width();
        e(document).on('show.bs.modal', function() {
            if ($winWidth < e(window).width()) {
                e('body.modal-open,.navbar-fixed-top,.navbar-fixed-bottom').css('marginRight', e(window).width() - $winWidth)
            }
        });
        e(document).on('hidden.bs.modal', function() {
            e('body,.navbar-fixed-top,.navbar-fixed-bottom').css('marginRight', 0)
        });
    })(jQuery);
	
	$(window).trigger("scroll");
});

// Scrollspy: Highlights the navigation menu items while scrolling.
$('body').scrollspy({
    target: '.navbar-fixed-top'
});

