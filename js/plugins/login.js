
    $('.error-page').hide(0);

$('.login-button , .no-access').click(function(){
  $('.login').slideUp(500);
  $('.error-page').slideDown(1000);
});

$('.try-again').click(function(){
  $('.error-page').hide(0);
  $('.login').slideDown(1000);
});

jQuery(document).ready(function($) {
    // Función para iniciar sesión como administrador
    function loginAdmin() {
        var login = $('#admin-username').val();
        var pass = $('#admin-password').val();

        if (login && pass) {
            // Aquí puedes realizar la llamada AJAX para el inicio de sesión del administrador
        } else {
            $('#messageUsuario').html('<div class="alert alert-danger">Por favor, complete todos los campos</div>');
        }
    }

    // Función para iniciar sesión como profesor
    function loginUsuario() {
        var login = $('#usuario').val();
        var pass = $('#contrasena').val();

        if (login && pass) {
            // Aquí puedes realizar la llamada AJAX para el inicio de sesión del usuario
        } else {
            $('#messageProfesor').html('<div class="alert alert-danger">Por favor, complete todos los campos</div>');
        }
    }

    // Eventos de clic para iniciar sesión
    $('#loginUsuario').on('click', loginAdmin);
    $('#loginUsuario').on('click', loginUsuario);
});
