index=parseInt(0);

var imagenes=new Array(
        'imagenes/carrito/1.jpg',
        'imagenes/carrito/2.jpg',
        'imagenes/carrito/3.jpg',
        'imagenes/carrito/4.png',
        'imagenes/carrito/5.png',
        'imagenes/carrito/6.png',
        'imagenes/carrito/7.png',
        'imagenes/carrito/8.png'
    );
 
    function rotarImagenes()
    {   
        if(index>7){
        index=parseInt(0);
        }
        document.getElementById("imagen").src=imagenes[index];
        index++; 
    };
 
    
    window.onload = function(){ 

    setInterval(rotarImagenes,3000);
    };