<?php

echo "<html> <form action='./ex3repeticao.php method='POST'>
        <input type='number' name='numero placeholder='Digite um número' required=''>
        <input type='submit' value='Ok'></html>";

if(isset($_POST['numero'])){
    $numero = $_POST['numero'];

    while($numero!=0){
        echo "<form action='./ex3repeticao.php method='POST'>
        <input type='number' name='num placeholder='Digite um número' required=''>
        <input type='submit' value='Ok'>";

    }
}

?>