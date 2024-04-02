
    $('.error-page').hide(0);

$('.login-button , .no-access').click(function(){
  $('.login').slideUp(500);
  $('.error-page').slideDown(1000);
});

$('.try-again').click(function(){
  $('.error-page').hide(0);
  $('.login').slideDown(1000);
});



$(document).ready(function(){
    $('#loginUsuario').on('click',function(){
    loginUsuario();

});
$('#loginProfesor').on('click',function(){
    loginProfesor();
});
})
     function loginAdmin() {
        var login = $('#usuario').val();
        var pass = $('#pass').val();
         $.ajax({
            url:'./includes/loginUsuario.php',
            method: 'POST',
            data:{
                login:login,
                pass: pass
            },
            success: function(data){
                $('#messageUsuario').html(data);

                if(data.indexOf('Redirecting')>=0){
                    window.location='adminstrador/';
                }
            }
         })
    }


    function loginProfesor() {
        var login = $('#usuario').val();
        var pass = $('#pass').val();
         $.ajax({
            url:'./includes/loginProfesor.php',
            method: 'POST',
            data:{
                login:login,
                pass: pass
            },
            success: function(data){
                $('#messageProfesor').html(data);

                if(data.indexOf('Redirecting')>=0){
                    window.location='profesor/';
                }
            }
         })
    }
   