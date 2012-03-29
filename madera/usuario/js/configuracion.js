function verificar(){
    if ($('#nombre').val() == '' || $('#descripcion').val() == ''){
        alert('El nombre o la descripcion estan vacios');
        return false;
    }
}

$(window).ready(function(){
    /**
     * Actualiza los productos
     */
    $('#guardar').click(function(){
        var arreglo = new Array();
        var i = 0;
        //Recorro los select
        $('.selectores').each(function(){
            if ( ($(this).val() == 1) || ($(this).val() == 2) || ($(this).val() == 3) ){
                var linea = new Array();
                linea[0] = $(this).attr('id');
                linea[1] = $(this).val();
                arreglo.push(linea);
            }
        });
        
        $.ajax({
            data : {
                'item' : arreglo
            },
            type : 'post',
            url : 'guardaconfig.php',
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
                alert("error");
            }
        });
    });
    /**
     * cheque que si un select cambia a un valor otro no tenga ese valor.
     */
    $('.selectores').change(function(){
        var select = $(this);
        var actual = $(this).val();
        if (actual != 100){
            $('.selectores').each(function(){
                if ($(this).val() == actual){
                    $(this).val('100');
                }
            });
        }
        select.val(actual);
    });
    
    $('#guardarNew').click(function(){
        if ($('#nuevo1').val() != $('#nuevo2').val()){
            var arreglo = new Array();
            //Recorro los select
            arreglo.push($('#nuevo1').val());
            arreglo.push($('#nuevo2').val());

            $.ajax({
                data : {
                    'item' : arreglo
                },
                type : 'post',
                url : 'guardaconfignew.php',
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
                    alert("error");
                }
            });        
        }
        else{
            alert("Hay dos iguales!!");
        }
    })
   
});
