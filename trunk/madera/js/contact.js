$(window).load(function(){
    $('#enviar').click(function(){
        var css = {
            'width':'100%',
            'border':'1px  #777 solid',
            'background-color':'#eee',
            'padding':'5px',
            'text-align':'center',
            'border-radius':'5px'
        };
        var div = $('<div></div>').css(css).html('Hay campos vac&iacute;os.');
        if  ($('#email').val() == '' && $('#telefono').val() == ''){
            $('#mensajeajax').html(div);
            return false;
        }
        if  ($('#nombre').val() == '' || $('#mensaje').val() == ''){
            $('#mensajeajax').html(div);
            return false;
        }        
        $.ajax({
            type: 'post',
            url: 'grabarconsulta.php',
            data: {
                nombre: $('#nombre').val(),
                email: $('#email').val(),
                telefono: $('#telefono').val(),
                mensaje: $('#mensaje').val()
            },
            success: function(mensaje){
                var divm = $('<div></div>').css(css).html(mensaje);
                $('#mensajeajax').html(divm);
            },
            error: function(mensaje){
                var divm = $('<div></div>').css(css).html('Se produjo un error de conexi&oacute;n. Vuelva a intentar');
                $('#mensajeajax').html(divm);
            }
            
        });
    });
    
    
    
});