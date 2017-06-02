// Code for overview buildings
$(document).ready(function () {

    //code for status messages
    if ($('.alert').length) {
        $('.alert').fadeOut(3000);
    }

    $( "#verhuurderInloggen" ).click(function() {
        $("#loginForm").attr('action', '/verhuurder/inloggen')
        $("#loginForm").submit();
    });
});

