 $('#usuarios').DataTable();


 document.addEventListener('DOMContentLoaded', function() {
    usuarios = $('#usuarios').DataTable({
        "processing": true,
        "serverSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/Spanish.json"
        },
        "ajax": {
            "url": "./models/usuarios/table_usuarios.php",
            "dataSrc": ""
        },
        "columns": [
            {"data": "acciones"},
            {"data": "idusuario"},
            {"data": "nombre"},
            {"data": "apellido_paterno"},
            {"data": "apellido_materno"},
            {"data": "usuario"},
            {"data": "sexo"},
            {"data": "correo"},
            {"data": "rol"},
            {"data": "estado"}
        ],
        "responsive": true,
        "destroy": true,
        "lengthMenu": [10, 25, 50, 100],
        "order": [[0, "asc"]]
    });
});


 function openModal(){
    $('#modalUsuario').modal('show');
   }
   