$('#login-form').submit(function () {
    if ($('#login-form input').val() == '') {
        $('.error-message').fadeIn();
        return false;
    } else {
        $('.error-message').fadeOut();
        $('#login-form').submit();
    }
});

$('#login-form input').focusin(function () {
    $('.error-message').fadeOut();
});



$('input[type="number"]').change(function(){
    var data = {
        tshirt : $('input[name="tshirt"]').val(),
        cap : $('input[name="cap"]').val(),
        shoe : $('input[name="shoe"]').val(),
        glasses : $('input[name="glasses"]').val(),
        shorts : $('input[name="shorts"]').val(),
        tshirts : $('input[name="tshirts"]').val(),
        tshirtkid : $('input[name="tshirtkid"]').val(),
        jean : $('input[name="jean"]').val(),
        dress1 : $('input[name="dress1"]').val(),
        dress2 : $('input[name="dress2"]').val(),
        dress3 : $('input[name="dress3"]').val(),
        dress4 : $('input[name="dress4"]').val(),
    }
   $.post("/shoptime/assets/js/app.php", data , function(data){
       
   }); 
});