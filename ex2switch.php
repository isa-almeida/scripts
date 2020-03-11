<html>

    <form action="./ex2switch.php" method="POST">

    <input type="number" name="n1" placeholder="Digite o primeiro Número" required="">
    <br>
    <input type="number" name="n2" placeholder="Digite o segundo número" required="">
    <br>
    <select name="op">
    <option value="op1" selected>Somar</option> 
    <option value="op2">Subtrair</option>
    <option value="op3">Multiplicar</option>
    <option value="op4">Dividir</option>
    </select>
    <input type="submit" value="Calcular">
    <br><br><br><br>

</html>

<?php

if(isset($_POST['n1']) && isset($_POST['n2']))
{
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];

    $opcao = $_POST['op'];
    
    switch($opcao){
        case "op1":
            $soma = $num1+$num2;
            echo "O Resultado da operação é {$soma}";
        break;

        case "op2":
            $subtrair = $num1-$num2;
            echo "O Resultado da operação é {$subtrair}";
        break;

        case "op3":
            $multiplicar = $num1*$num2;
            echo "O Resultado da operação é {$multiplicar}";
        break;

        case "op4":
            $dividir = $num1/$num2;
            echo "O Resultado da operação é {$dividir}";
        break;

    }
}
?>