<?php 
    $sexo = $_GET ['sex'];
    $idade = $_GET ['age'];
    $nome = $_GET ['name'];

    if ($sexo == "Feminino" && $idade < 25) {
        echo $nome.' ACEITA';
    }else if ($idade > 25) {
        echo $nome.' NÃO ACEITA';
    }



?>