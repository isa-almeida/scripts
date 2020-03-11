
    <html>

    <form action="./ex2condicional.php" type="number" method="POST">
    Digite a Temperatura em graus Celsius:

    <input type="number" name="temperatura" placeholder="Temperatura" request="">
    <input type="submit" value="Calcular">
    <br><br>
    </form>
</html>

<?php
if(isset($_POST['temperatura']))
    {
        $valor = $_POST['temperatura'];

        if($valor <= 18)
        {
            echo "Clima Frio";
        }
        else if(($valor >18) && ($valor <=23))
        {
            echo "Clima Agradável";
        }
        else if(($valor >23) && ($valor <=35))
        {
            echo "Clima Quente";
        }
        else
        echo "Clima Quente";
    }
?>