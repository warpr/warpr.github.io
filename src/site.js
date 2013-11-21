var projects = function () {
    "use strict";

    /* quick lightbox. */
    $('div.lightbox-switcher label').on ('click', function (event) {
        var idx = $(this).prevAll ().length;
        var $body = $(this).closest ('.modal-dialog').find ('.modal-body');
        $body.find ('img').hide ().eq (idx).show ();
    });

    /* cross-fade screenshots. */
    var fadeshow_options = { duration: 1000 };
    var fadeshow_pause = 20000;
    var fadeshow_stagger = fadeshow_pause / 3;

    $('.images ul li:first-child').addClass ('visible');
    $('.images').each (function (idx, element) {
        $(element).find ('li:not(:first) img').css ('opacity', 0);
    });

    var pick_next_image = function ($element) {
        var $current = $element.find ('li.visible');
        var $next = $current.next ().length ?
            $current.next () : $current.siblings ().eq(0);

        $current.removeClass ('visible');
        $next.addClass ('visible');

        return { "prev": $current.find ('img'), "next": $next.find ('img') };
    }

    var fade_to_next_image = function ($element) {
        var img = pick_next_image ($element);
        img.prev.animate ({ opacity: 0.0 }, fadeshow_options);
        img.next.animate ({ opacity: 1.0 }, fadeshow_options);
    }

    var stagger = 0;
    $('.images').each (function (idx, element) {
        var $element = $(element);
        if ($element.find ('img').length < 2)
            return;

        setTimeout (function () {
            setInterval (function () {
                fade_to_next_image ($element);
            }, fadeshow_pause);
        }, stagger);

        stagger += fadeshow_stagger;
    });

};

(function () {
    "use strict";

    /* full height columns. */
    var full_height = function() {
        if ($('#content').position ().top < 5)
        {
            $(".full-height").height("auto").height($(document).height());
        }
    }
    full_height();
    $(window).resize(function () { full_height(); });

})();
