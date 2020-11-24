function consulta (url,valor2){

      if(valor2==3){
        valor = confirm("Esta seguro de eliminar todas las canciones?");
        if(valor){
        $.post( url , { valor: valor2}).done( function(respuesta){
        $( '#formu' ).html( respuesta );    
        });    
        }
      }

      else{
      $.post( url , { valor: valor2}).done( function(respuesta){
      $( '#formu' ).html( respuesta );    
      });
      } 
      
}

$(document).ready(function(){

	$('#subircancion').click(function(){
  	consulta('consulta.php',1);
  	});

  
	$('#eliminarcancion').click(function(){
  	consulta('consulta.php',2);
  	});

  
});




