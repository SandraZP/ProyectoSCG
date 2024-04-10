<?php


// Permitir el acceso desde cualquier origen
header("Access-Control-Allow-Origin: *");

// Permitir métodos GET, POST, OPTIONS
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

// Permitir ciertos encabezados
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Terminar si la solicitud es OPTIONS (preflight)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Resto del código del script PHP

require_once '../../../includes/conexion.php'; // Asegúrate de incluir el archivo de conexión correctamente

// Verifica si la conexión a la base de datos se realizó correctamente
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Forma la consulta SQL
$sql = 'SELECT * FROM usuarios WHERE estado != 0';

// Ejecuta la consulta SQL
$resultado = mysqli_query($conexion, $sql);

// Verifica si hay errores en la ejecución de la consulta
if (!$resultado) {
    die("Error en la consulta SQL: " . mysqli_error($conexion));
}

$consulta = array();

// Verifica si se obtuvieron resultados de la consulta
if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        // Agrega la columna 'estado' con el formato deseado
        $fila['estado'] = ($fila['estado'] == 1) ? '<span class="badge badge-success">Activo</span>' : '<span class="badge badge-danger">Inactivo</span>';
        
        // Construye las acciones para cada usuario
        $acciones = '
            <button class="btn btn-primary" title="editar"
             onclick="editarUsuario('.$fila['id_usuario'].')">Editar</button>
            <button class="btn btn-danger" title="eliminar" 
            onclick="eliminarUsuario('.$fila['id_usuario'].')">Eliminar</button>';
        
        $fila['acciones'] = $acciones;

        // Agrega la fila al array de consulta
        $consulta[] = $fila;
    }
}

// Convierte el array a formato JSON y envíalo como respuesta
echo json_encode($consulta, JSON_UNESCAPED_UNICODE);
?>
