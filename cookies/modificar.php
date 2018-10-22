<?php



session_start();

$_session['contador'] = 1;



if('Reiniciar'){

}else {
  $_COOKIE['contador'] = 1;
  echo $_COOKIE['contador'];
}



 ?>
<br>
 <a href="modificar.php">Reiniciar</a>
 <br>
 <a href="#">Incremenetar</a>
