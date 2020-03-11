<html>
    <form action="./ex1repeticao.php" method="POST">

    <input type="number" name="tabuada" value="Digite um número inteiro" required="">
    <input type="submit" value="Calcular">
    <br>
</html>

<?php

if(isset($_POST['tabuada'])){

    $num = $_POST['tabuada'];

    for($i=1; $i<=10; $i++){
        echo "{$num} X {$i} = ".($num*$i)."<br>";
        
    }
}

?>