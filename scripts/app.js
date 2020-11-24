$(document).ready(function(){
    var url = 'obtenercanciones.php';
    var url2 = 'duracion.php';
    var url3 = 'reproducir.php';
    finalizar = 0;

    function reproducir(selectedsong){
        $.post( url3, {valor2:selectedsong} ).done( function(respuesta){});
    }

    function siguiente(selectedsong){
       selectedsong = parseInt(selectedsong) + 1;  
       reproducircanciones(selectedsong);   
    }

    function reproducircanciones(selectedsong){
       $.post( url2 , {valor2:selectedsong}).done( function(respuesta){
        if(respuesta==0){
        siguiente(selectedsong);
        }else{
        
        tiempo = respuesta;
	tiempo2 = (parseInt(tiempo.charAt(5)))*60;
	tiempo2 = tiempo2 + ((parseInt(tiempo.charAt(7)))*10);
        tiempo2 = tiempo2 + parseInt(tiempo.charAt(8));
        tiempo2 = tiempo2*1000;
        reproducir(selectedsong);
        
        finalizar = setTimeout(function(){ 
            selectedsong = parseInt(selectedsong) + 1;  
            reproducircanciones(selectedsong);    
        }, tiempo2);
        
        }
                
        });
    }

  $.post( url ).done( function(respuesta){
        $( '#playlist' ).html( respuesta );
        $('#playlist a li').click(function(){
        clearTimeout(finalizar);
        selectedsong = $(this).attr('id');
        reproducircanciones(selectedsong);
        }); 
    });
    
    
   

    

});
