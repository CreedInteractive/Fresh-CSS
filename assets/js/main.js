$(document).ready(function() {
    // Pretty print source code
    $('.source-code .btn').on('click', function(e) {
        e.preventDefault();
        $(this).next('.prettyprint').toggleClass('active');
    });

    // Jump to anchor animation
    $('nav a').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);
        
        if ($target.offset() === undefined) {
            window.location = this.href;
        }

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});
