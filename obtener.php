<?php

$valor = $_POST['valorvalor'];


switch ($valor) {
    	case '1':
		exec('sudo python /var/www/html/bot4/py/vol-.py');
		break;
		case '2':
		exec('sudo python /var/www/html/bot4/py/kill.py');
		break;
		case '3':
		exec('sudo python /var/www/html/bot4/py/killpy.py');
		exec('sudo python /var/www/html/bot4/py/izquierda.py');
		break;
		case '4':
		exec('sudo python /var/www/html/bot4/py/killpy.py');
		exec('sudo python /var/www/html/bot4/py/adelante.py');
		break;
        case '5':
        exec('sudo python /var/www/html/bot4/py/killpy.py');
        exec('sudo python /var/www/html/bot4/py/para.py');	
	    break;
		case '6':
		exec('sudo python /var/www/html/bot4/py/killpy.py');
		exec('sudo python /var/www/html/bot4/py/atras.py');
		break;
		case '7':
		exec('sudo python /var/www/html/bot4/py/killpy.py');
		exec('sudo python /var/www/html/bot4/py/derecha.py');
		break;
		case '8':
		exec('sudo python /var/www/html/bot4/py/vol+.py');
		break;
	
	
	default:
		exec('sudo python /var/www/html/bot4/py/para.py');	
		break;
}

?>
