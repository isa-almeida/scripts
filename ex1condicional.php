<html>

    <form action="./ex1condicional.php" method="POST">
    
    <h1>Digite um número para verificar se é múltiplo de 5:</h1>
    
    <br/>

    <input type="number" name="multiplo5" placeholder="Digite um número" required"">

    <input type="submit" value="Ok">
    <br><br><br>

    </form>


<?php

if(isset($_POST['multiplo5'])) //verifica se o campo está vazio antes de receber o valor
{
    $calcula = $_POST['multiplo5'];

    if($calcula % 5 == 0)
    {
        echo "Múltiplo de 5!";
    }
    else
    {
        echo "Não é Múltiplo!";
    }
}

?>