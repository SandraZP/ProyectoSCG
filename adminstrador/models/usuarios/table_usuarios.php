<?php
require_once '../../../includes/conexion.php';

// Verifica si la conexión a la base de datos se realizó correctamente
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$sql = 'SELECT * FROM usuarios WHERE estado != 0';
$resultado = mysqli_query($conexion, $sql);

$consulta = array();

// Verifica si se obtuvieron resultados de la consulta
if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        // Agrega la columna 'estado' con el formato deseado
        $fila['estado'] = ($fila['estado'] == 1) ? '<span class="badge badge-success">Activo</span>' : '<span class="badge badge-danger">Inactivo</span>';
        
        // Construye las acciones para cada usuario
        $acciones = '
            <button class="btn btn-primary" title="editar" onclick="editarUsuario('.$fila['usuario_id'].')">Editar</button>
            <button class="btn btn-danger" title="eliminar" onclick="eliminarUsuario('.$fila['usuario_id'].')">Eliminar</button>';
        
        $fila['acciones'] = $acciones;

        // Agrega la fila al array de consulta
        $consulta[] = $fila;
    }
}

// Convierte el array a formato JSON y envíalo como respuesta
echo json_encode($consulta, JSON_UNESCAPED_UNICODE);

// Cierra la conexión a la base de datos
mysqli_close($conexion);
?>
