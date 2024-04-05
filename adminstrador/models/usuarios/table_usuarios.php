<?php

require_once '../../../includes/conexion.php';

$sql = 'SELECT * FROM usuarios WHERE estado != 0';
$squery = $pdo->prepare($sql);
$squery->execute();

$consulta = $squery->fetchAll(PDO::FETCH_ASSOC);

for ($i = 0; $i < count($consulta); $i++) {
    if ($consulta[$i]['estado'] == 1) {
        $consulta[$i]['estado'] = '<span class="badge badge-success">Activo</span>';
    } else {
        $consulta[$i]['estado'] = '<span class="badge badge-danger">Inactivo</span>';
    }

    $consulta[$i]['acciones'] = '
    <button class="btn btn-primary" title="editar" onclick="editarUsuario
    ('.$consulta[$i]['usuario_id'] . ')">Editar</button>
    
    <button class="btn btn-danger" title="eliminar" onclick="eliminarUsuario
    ('.$consulta[$i]['usuario_id'].')">Eliminar</button>';
}

echo json_encode($consulta, JSON_UNESCAPED_UNICODE);
?>
