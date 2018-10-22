<?php



session_start();

$_session['contador'] += 1;

echo $_session['contador'];

header(‘modificar.php’);


 ?>


 <a href="#">Salir</a>
 <br>
 <a href="#">Index</a>
