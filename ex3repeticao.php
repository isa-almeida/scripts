<html>
    <form action="./ex3repeticao.php" method="POST">
        <input type="number" name="numero" placeholder="Digite um número" required="">
        <input type="submit" value="Ok">
    </form>
<html>

<?php

$_SESSION['valores'] = 0;

session_start();

if(isset($_POST['numero']))
{
    $num = $_POST['numero'];

    $valores = $_SESSION['valores'];

    if(($num >= 100) && ($num <= 200))
    {
        $valores++;

        $_SESSION['valores'] = $valores;
    }

    if($num == 0)
    {
        echo " Foram digitados {$valores} números entre 100 e 200";
        
        $_SESSION['valores'] = 0;
    }
}