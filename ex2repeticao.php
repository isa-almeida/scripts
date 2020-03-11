<html>

    <form action="./ex2repeticao.php" method="POST">

    <input type="text" name="palavra" placeholder="Digite uma palavra" required="">

    <input type="submit" value="Ok">

    </form>
</html>

<?php

if(isset($_POST['palavra'])){

    $palavra = $_POST['palavra'];

    for($i=0; $i <=4; $i++)
    {
        for($j=0; $j<$i; $j++)
        {
            echo $palavra;
        }
        echo "<br>";
    }
}