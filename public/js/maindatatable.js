if($('#listform')){
    $('#listform').DataTable({
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "language": {
            "lengthMenu": "Mostrar _MENU_ Contactos",
            "zeroRecords": "No se encontraron resultados",
            "info": "Contactos de _START_ al _END_ de un total de _TOTAL_ recibidos",
            "infoEmpty": "Contactos de 0 al 0 de un total de 0 recibidos",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Fecha:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing":"Procesando...",
        },
        // searching: false,

    }); 
}
