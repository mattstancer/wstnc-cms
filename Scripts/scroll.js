jQuery(document).ready(function () {
    var offset = 25;
    var duration = 500;
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.gora').fadeIn(duration);
        } else {
            jQuery('.gora').fadeOut(duration);
        }
    });

    jQuery('.gora').click(function (event) {
        event.preventDefault();
        jQuery('html, body').animate({ scrollTop: 0 }, duration);
        return false;
    })
});