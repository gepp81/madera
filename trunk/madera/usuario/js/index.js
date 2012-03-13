$(window).ready(function(){
    $('.mensaje_eliminar').click(function(){
        if (confirm("Desea realmente eliminar este mensaje?")){
            $.ajax({
                data : {
                    'mensaje_id' : $(this).attr('mensaje')
                },
                type : 'post',
                url : 'borrarmensaje.php',
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

