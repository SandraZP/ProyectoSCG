const spans = document.querySelectorAll('p span');
const numLetters = spans.length;

spans.forEach(function(span, i) {
    const mappedIndex = i - (numLetters / 2)
    span.style.animationDelay = (mappedIndex * 0.25) + 's';
});

const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
	item.addEventListener('click', function() {
		switchers.forEach(item => item.parentElement.classList.remove('is-active'))
		this.parentElement.classList.add('is-active')
	})
})




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
   