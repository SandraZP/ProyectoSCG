 $('#usuarios').DataTable();


 document.addEventListener('DOMContentLoaded', function() {
    usuarios = $('#usuarios').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/Spanish.json"
        },
        "ajax": {
            "url": "./models/usuarios/table_usuarios.php",
            "dataSrc": ""
        },
        "columns": [
            {"data": "acciones"},
            {"data": "usuario_id"},
            {"data": "nombre"},
            {"data": "primer_apellido"},
            {"data": "segundo_apellido"},
            {"data": "sexo"},
            {"data": "correo"},
            {"data": "usuario"},
            {"data": "rol"},
            {"data": "estado"}
        ],
        "responsive": true,
        "bDestroy": true,
        "iDisplayLength": 10,
        "order": [[0, "asc"]]
    });
});


 function openModal(){
    $('#modalUsuario').modal('show');
   }
   