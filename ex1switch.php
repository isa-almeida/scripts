<html>

    <form action="./ex1switch.php" method="POST">

    <input type="number" name="semana" placeholder="Digite um Número" required="">
    <br>
    <input type="submit" value="Ok">
    <br><br><br>

</html>

<?php

if(isset($_POST['semana']))
{
    $semana = $_POST['semana'];
    
    switch($semana){
        case 1:
            echo "Domingo";
        break;

        case 2:
            echo "Segunda-Feira";
        break;

        case 3:
            echo "Terça-Feira";
        break;

        case 4:
            echo "Quarta-Feira";
        break;

        case 5:
            echo "Quinta-Feira";
        break;

        case 6:
            echo "Sexta-Feira";
        break;

        case 7:
            echo "Sábado";
        break;


    }
}
?>