<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$a = $_GET["l1"];
$b = $_GET["l2"];
$c = $_GET["l3"];


if ($a + $b + $c == 180) {
  if ($a == $b && $b == $c) {
    echo "O triângulo é equilátero.";
  } elseif ($a == $b || $b == $c || $a != $c) {
    echo "O triângulo é isósceles.";
  } else {
    echo "O triângulo é escaleno.";
  }

}else{
    echo "Não é um triângulo";
}

?>
</body>
</html>