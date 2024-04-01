<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Inicio de sesión</title>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="login">
  <div class="login-header">
    <h1>Bienvenido</h1>
  </div>
    <div class="form-wrap">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#admin-tab-pane" 
                role="tab" aria-controls="admin-tab-pane" aria-selected="true">Administrador</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profesor-tab-pane" 
                role="tab" aria-controls="profesor-tab-pane" aria-selected="false">Profesor</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="admin-tab-pane" role="tabpanel" aria-labelledby="home-tab">
                <div class="tabs-content">
                    <div id="admin-signup-tab-content" class="active signup-tab-content">
                        <form  action="" onsubmit="return validar()">
                            <div class="login-form">
                                <h3>Nombre de usuario</h3>
                                <input type="tex" name="usuario" id="usuario" placeholder="Nombre de usuario"/><br>
                                <h3>Contraseña</h3>
                                <input type="password"name="pass" id="pass" placeholder="Contraseña"/>
                                <div id="messageAdmin"></div>
                                <br>
                                <input id="loginAdmin" type="button" class="login-button" value="Iniciar ">
                            </div>
                        </form>
                    </div><!--.signup-tab-content-->
                </div><!--.tabs-content-->
            </div><!--#admin-tab-pane-->

            <div class="tab-pane fade" id="profesor-tab-pane" role="tabpanel" aria-labelledby="profile-tab">
                <div class="tabs-content">
                    <div id="profesor-signup-tab-content" class="active signup-tab-content">
                        <form  action="" onsubmit="return validar()">
                            <div class="login-form">
                            <h3>Nombre de usuario</h3>
                                <input type="tex" name="usuario" id="usuario" placeholder="Nombre de usuario"/><br>
                                <h3>Contraseña</h3>
                                <input type="password"name="pass" id="pass" placeholder="Contraseña"/>
                                <div id="messageProfesor"></div>
                                <br>
                                <input id="loginProfesor" type="button" class="login-button" value="Iniciar ">
                            </div>
                        </form>
                    </div><!--.signup-tab-content-->
                </div><!--.tabs-content-->
            </div><!--#profesor-tab-pane-->
        </div><!--.tab-content-->
    </div><!--.form-wrap-->
</div><!--.login-->
<script src="/Proyectoscg/js/login.js"></script>
<script src="/path/to/loginUsuario.php"></script>
<script>
    $(document).ready(function(){
        $('.nav-tabs a').click(function(){
            $(this).tab('show');
        });
    });
</script>
...

</body>
</html>
