function verificar(){
    if ($('#nombre').val() == '' || $('#descripcion').val() == ''){
        alert('El nombre o la descripcion estan vacios');
        return false;
    }
}

$(window).ready(function(){
/*
 * Pregunta si se desea eliminar un producto y se elimina
 */
$('.eliminar_producto').click(function(){
    if (confirm("Desea realmente eliminar este producto?")){
        $.ajax({
            data : {
                'item_id' : $(this).attr('item')
            },
            type : 'post',
            url : 'borraritem.php',
            dataType : 'json',
            success : function(data){
                if (data.estado){
                    location.reload();
                }
                else {
                    alert("noanda");
                }
            },
            error : function(){
                alert("noanda");
            }
        });
    } 
});
});