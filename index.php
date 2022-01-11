<html>
  <form method="GET">
    <label for="valor1">Insira o primeiro valor</label>
    <input type="text" name="valor1">
    <label for="valor1">Insira o segundo valor</label>
    <input type="text" name="valor2">

    <input type="submit">Conferir</input>
  </form>
</html>

<?php
function primosEntre($n1, $n2){
  $array = [];
  for($i = $n1 + 1; $i < $n2; $i++){
    $contador = 0;

    for($d = 2; $d < $i; $d++){
      if($i % $d == 0){
        $contador .= 1;
        break;
      }
    }

    if($contador == 0){
      array_push($array, $i);
    }
  }
  return $array;
}

$n1 = $_GET["valor1"];
$n2 = $_GET["valor2"];

$resultado = primosEntre($n1, $n2);
echo $resultado;
?>