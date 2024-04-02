 $('#usuarios').DataTable();


document.addEventListener('DOMcontentLoaded',function(){
    usuarios=$('#usuarios').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language":{
            "url":"//cdn.datatables.net/plug-ins/1.10.20/Spanish.json"
        },
        "ajax":{
            "url":"./models/usuarios/table_usuarios.php",
            "dataSrc":""
        },
        "columns":[
            {"data":"acciones"},
            {"data":"idusuario"},
            {"data":"nombre"},
            {"data":"apellido_paterno"},
            {"data":"apellido_materno"},
            {"data":"usuario"},
            {"data":"sexo"},
            {"data":"correo"},
            {"data":"rol"},
            {"data":"estado"}
        ],
        "responsive": true,
        "bDestroy":true,
        "iDisplayLength":10,
        "order":[[0,"asc"]]

    })
})



 function openModal(){
    $('#modalAdmin').modal('show');
   }
   