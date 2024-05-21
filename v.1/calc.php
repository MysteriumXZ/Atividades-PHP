<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora 1.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <h1>Calculadora 1.0</h1>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="">Insira o primeiro número</label>
        <input type="text" name="n1" class="input-group-text">
        <label for="">Insira o segundo número</label>
        <input type="text" name="n2" class="input-group-text"> <br>
        <button class="btn btn-primary" type="submit">Calcular</button>
    </form>

    <?php
        if (isset($_POST['n1']) && isset($_POST['n2'])) {
            $n1 = (int)$_POST['n1'];
            $n2 = (int)$_POST['n2'];

            $soma = $n1 + $n2;

            if ($soma > 20){
                $resultado = $soma + 8;
                echo 'O resultado foi maior que 20, logo, foi adicionado mais 8. ';
            } elseif ($soma <= 20) {
                $resultado = $soma - 5;
                echo 'O resultado foi menor ou igual a 20, logo, foi subtraído menos 5. ';
            }

            echo "O resultado é: " .$resultado;
        }
    ?>
    


</body>
</html>