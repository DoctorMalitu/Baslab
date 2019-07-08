
jQuery(document).on('submit','#formLg',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'main_app/login.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend: function(){
                  $('.botonlg').val('Validando....');
                }
              })
              .done(function(respuesta){
                console.log(respuesta);
                if (!respuesta.error) {
                  if (respuesta.tipo ='Admin') {
                    location.href= "main_app/Admin/";
                  }else if (respuesta.tipo ='Usuario') {
                    location.href= "main_app/Usuarioo/";
                  }
                }else {
                  setTimeout(function(){
                  $('.botonlg').val('Iniciar Sesion');
                },3000);
                $('.botonlg').val('Usuario o contraseña incorrecta');
                }
              })
              .fail(function(resp){
                console.log(resp.responseText);
              })
              .always(function(){
                console.log("complete");
            });
      });
