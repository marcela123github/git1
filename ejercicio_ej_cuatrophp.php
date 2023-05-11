<?php
include 'ejercicio_ej_cuatro.html';

if (isset($_POST['datos'])) {
$a=1;
$cant = $_POST['cantidad'];

while ($a <= $cant) {
echo'Hola Mundo'.$a.'<br>';
$a++;
}

}
?>