<?php 
    $n1 = $_GET ['nm1'];

    if ($n1 % 10 == 0 && $n1 % 5 == 0 && $n1 % 2 == 0){
        echo 'Seu número é divísel por 10, 5, 2';
    }elseif ($n1 % 10 == 0){
        echo 'Seu número é divísel por 10';
    }elseif ($n1 % 5 == 0){
        echo 'Seu número é divísel por 5';
    }elseif ($n1 % 2== 0){
        echo 'Seu número é divisível por 2';
    }
    
    
?>