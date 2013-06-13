$.fx.interval = 8;
var duration = 2000;
var $content = $('.content');
var $sidebar = $('.sidebar');

var slide_in = function (section) {
    $content.stop ();
    $sidebar.stop ();

    $sidebar.find ('ul').hide ();
    $sidebar.find ('ul.' + section).css ('margin-top', window.scrollY).show ();
    $sidebar.css ('min-height', $content.height ());

    var empty = $('body').width () - 1050;
    if (empty > 0)
    {
        $content.animate ({ left: empty, opacity: 0.5 }, duration);
    }

    $sidebar.animate ({ left: 0 }, duration);
};

var slide_out = function (section) {
    $content.stop ();
    $sidebar.stop ();

    $content.css ('min-height', $sidebar.height ());

    $content.animate ({ left: 0, opacity: 1.0 }, duration);
    $sidebar.animate (
        { left: (0 - $('.sidebar').width ()) }, duration,
        function () { $sidebar.find ('ul').hide (); }
    );
};

$('.images').each (function (idx, element) {
    var $element = $(element);
    $element.bjqs({
        'width': 450,
        'height': 255,
        'responsive': true,
        'animtype': 'fade',
        'animduration': 1000,
        'animspeed': 4000,
        'automatic': true,
        'showcontrols': false,
        'showmarkers': false,
        'keyboardnav': false,
        'hoverpause': true,
        'usecaptions': false,
        'randomstart': false,
        'responsive': true
    });
});

$sidebar.find ('ul').hide ();

$('div.images').on ('click', function (event) {
    slide_in ($(this).closest ('section').attr ('class'));
});

$sidebar.on ('click', slide_out);
