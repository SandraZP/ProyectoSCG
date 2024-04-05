<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Aquí van tus etiquetas meta, títulos, estilos, etc. -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Adminstrador/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="../Adminstrador/js/jquery-3.2.1.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="../Adminstrador/js/bootstrap.min.js"></script>
    
    <script src="js/functions-usuarios.js"></script>



    <!-- Otros archivos JS -->
    <script src="../Adminstrador/js/main.js"></script>
    <script src="../Adminstrador/js/plugins/pace.min.js"></script>
    <script src="../Adminstrador/js/plugins/jquery.dataTables.min.js"></script>
    <script src="../Adminstrador/js/plugins/dataTables.bootstrap.min.js"></script>
    <script src="../Adminstrador/functions-usuarios.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Inicio de sesión</title>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
</head>
<body>

<section class="forms-section">
  <!-- Cambia "Bienvenido" por "Geist Sans" -->
  <div class="container">
    <p aria-label="Bienvenido">
      <span aria-hidden="true">B</span><span aria-hidden="true">i</span><span aria-hidden="true">e</span><span aria-hidden="true">n</span><span aria-hidden="true">v</span><span aria-hidden="true">e</span><span aria-hidden="true">n</span><span aria-hidden="true">i</span><span aria-hidden="true">d</span><span aria-hidden="true">o</span>
    </p>
</div>


  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
        Login
        <span class="underline"></span>
      </button>


      <form class="form form-login">
        <fieldset>
          <div class="input-block">
            <label for="login-email">usuario</label>
            <input id="login-email" type="usuario" required>
          </div>
          <div class="input-block">
            <label for="login-password">contraseña</label>
            <input id="login-password" type="password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-login">Iniciar</button>
      </form>


    </div>
    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">
        Sign Up
        <span class="underline"></span>
      </button>


      <form class="form form-signup">
        <fieldset>
          <div class="input-block">
            <label for="signup-email">usuario</label>
            <input id="signup-email" type="usuario" required>
          </div>
          <div class="input-block">
            <label for="signup-password">Password</label>
            <input id="signup-password" type="password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-signup">ContinueIniciar</button>
      </form>
    </div>
  </div>
</section>
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
