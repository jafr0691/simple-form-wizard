let touchEvent = 'ontouchstart' in window ? 'touchstart' : 'click';
function editar(id) {
    location.href = "../edit/" + id;
}

for (var i = 0; i <= document.querySelectorAll('#list').length - 1; i++) {
    $(".delet")[i].addEventListener(touchEvent, msjdelet);
}

function msjdelet(e) {
    console.log(e);
    var nombre = e.target.getAttribute('data-name');
    var id = e.target.getAttribute('data-id');
    $('#titlemsjdelet').html('<strong>' + nombre + '</strong>');
    $('#mensajedelet').html('Desea eliminar del Form a <strong>' + nombre + '</strong>?');
    $('#btnmodaldelet').html('<button type="button" class="btn btn-danger" style="position: absolute; left:30px; bottom: 10px;" id="btndelet" data-dismiss="modal" data-id="' + id + '"><i class="fa fa-trash"></i> Eliminar <span class="text-danger glyphicon glyphicon-trash"></span></button>');
    $('#btndelet').on(touchEvent, delet);
}

function delet() {
    var id = document.getElementById('btndelet').getAttribute('data-id');
    jQuery.ajax({
        url: location.origin+"/action/delet.php",
        type: 'post',
        data: {id: id},
        success: function(dato) {
            console.log(dato);
            document.getElementById('delet' + id).parentElement.parentElement.remove();
        }
    });
}