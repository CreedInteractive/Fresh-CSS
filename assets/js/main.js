$(document).ready(function() {
    $('.source-code .btn').on('click', function(e) {
        e.preventDefault();
        $(this).next('.prettyprint').toggleClass('active');
    });
});
