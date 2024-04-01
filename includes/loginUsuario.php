<?php
require_once 'conexion.php';
session_start();

if (!empty($_POST)) {
    if (empty($_POST['login']) || empty($_POST['pass'])) {
        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>
        Todos los campos son necesarios</div>';
    } else {
        $login = $_POST['login'];
        $pass = $_POST['pass'];

        try {
            $sql = 'SELECT * FROM usuario as u INNER JOIN rol as r ON u.idrol = r.idrol WHERE u.nombre = ?';
            $query = $pdo->prepare($sql);
            $query->execute(array($login));
            $result = $query->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                if (password_verify($pass, $result['password'])) {
                    $_SESSION['active'] = true;
                    $_SESSION['id_usuario'] = $result['idusuario'];
                    $_SESSION['nombre'] = $result['nombre'];
                    $_SESSION['rol'] = $result['idrol'];
                    $_SESSION['nombre_rol'] = $result['rol'];

                    echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>
                    Redireccionando...</div>';
                } else {
                    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>
                    Usuario o contraseña incorrectos</div>';
                }
            } else {
                echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>
                Usuario no encontrado</div>';
            }
        } catch (PDOException $e) {
            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>
            Error al ejecutar la consulta</div>';
        }
    }
}
?>
