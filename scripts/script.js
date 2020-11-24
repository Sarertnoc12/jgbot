  function obtener(valor){
switch(valor){
  case 1:
  alert("bajando volumen");
  break;
  case 2:
  alert("quitando musica");
  window.location="index.php";
  break;

case 3:
  alert("moviendome a la izquierda")
  break;

case 4:
  alert("moviendome hacia adelante");
  break;
case 5:
  alert("ya pare");
  break;

case 6:
  alert("moviendome hacia atras");
  break;

case 7:
  alert("moviendome a la derecha");
  break;

case 8:
  alert("subiendo volumen");
  break;
  case 9:
  alert("3123702296-3213304171");
  break;

}
   	
    $.post( 'obtener.php', { valorvalor: valor} , function()
        {

        }
        );
   }