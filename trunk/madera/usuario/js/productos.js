$(window).ready(function(){
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