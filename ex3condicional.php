<html>
    <form action="./ex3condicional.php" method="POST">

    <input type="number" name="x" placeholder="Valor de X" required="">

    <input type="number" name="y" placeholder="Valor de Y" required="">

    <input type="number" name="z" placeholder="Valor de Z" required="">

    <input type="submit" value="Ok">
    <br><br><br>
</html>

<?php

    if(isset($_POST['x']) && isset($_POST['y']) && isset($_POST['z']))
    {
        $x = $_POST ['x'];
        $y = $_POST['y'];
        $z = $_POST['z'];
            

        if(($z >= $y || $z >=$x) && ($z <= $y || $z <= $x))
        {
            echo "O Número {$z} pertence ao intervalo {$x} e {$y}";
        } 
        else
        {
            echo "O número {$z} não pertence ao intervalo {$x} e {$y}";
        }

    }