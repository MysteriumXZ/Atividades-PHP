<?php
    if (isset($_GET['numr'])) {
        $n1 = (int) $_GET['numr'];
        if ($n1 >= 1 && $n1 <= 12) {

            switch ($n1) {
                case 1:
                    echo "O mês correspondente é Janeiro!";
                    break;
                case 2:
                    echo "O mês correspondente é Fevereiro!";
                    break;
                case 3:
                    echo "O mês correspondente é Março!";
                    break;
                case 4:
                    echo "O mês correspondente é Abril!";
                    break;
                case 5:
                    echo "O mês correspondente é Maio!";
                    break;
                case 6:
                    echo "O mês correspondente é Junho!";
                    break;
                case 7:
                    echo "O mês correspondente é Julho!";
                    break;
                case 8:
                    echo "O mês correspondente é Agosto!";
                    break;
                case 9:
                    echo "O mês correspondente é Setembro!";
                    break;
                case 10:
                    echo "O mês correspondente é Outubro!";
                    break;
                case 11:
                    echo "O mês correspondente é Novembro!";
                    break;
                case 12:
                    echo "O mês correspondente é Dezembro!";
                    break;
            }
        } else {
            echo "Não existe mês com o número $n1.";
        }
    }
?>