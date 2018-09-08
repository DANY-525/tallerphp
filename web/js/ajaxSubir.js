//cuando se ejecuta la ventana
$(document).on('ready',function(){


    $( "#formulario" ).submit(function( event ) {
     // alert( "Handler for .submit() called." );
      event.preventDefault();

          var url="index.php?modulo=usuarios&funcion=insertarDatos";
         /* var form = document.getElementById("formulario");

          var data   = new FormData(form);
            jQuery.each($('input[type=file]')[0].files, function(i, file) {
                data.append('file-'+i, file);
            });
            var other_data = $('form').serializeArray();
            $.each(other_data,function(key,input){
                data.append(input.name,input.value);
            });
            */

        jQuery.ajax({
            url: url,
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(data){
               var json =  JSON.parse(data);

               console.log(json);
            }
        });

    });




});
