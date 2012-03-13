$(window).ready(function(){
    // elimina la imagen selecionada
    $('.eliminar_imagen').click(function(){
       if (confirm("Desea realmente eliminar esta foto?")){
           $.ajax({
               data : { 'foto_id' : $(this).attr('imagen')},
               type : 'post',
               url : 'borrarfoto.php',
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
    
    // Marca esta imagen como primaria
    $('.marcar_imagen').click(function(){
       if (confirm("Desea usar esta imagen?")){
           $.ajax({
               data : { 'foto_id' : $(this).attr('imagen'), 'item_id' : $(this).attr('item')  },
               type : 'post',
               url : 'principalfoto.php',
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