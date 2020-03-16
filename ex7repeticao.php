<?php
 
 $matriz = array
 (
     array(1, 2, 3, 4, 5),
     array(6, 7, 8, 9, 10),
     array(11, 12, 13, 14, 15),
     array(16, 17, 18, 19, 20),
     array(21, 22, 23, 24, 25)
 );
 
 //IMPRIMIR MATRIZ
 for ($linha=0; $linha<5; $linha++) {
     for ($coluna=0; $coluna<5; $coluna++) {
            echo $matriz[$linha][$coluna]."  ";
     }
     echo "<br>";
 }

 echo "<br><br><br>";

 //IMPRIMIR MATRIZ COM NÚMEROS PARES
 for ($linha=0; $linha<5; $linha++) {
    for ($coluna=0; $coluna<5; $coluna++) {
        if($matriz[$linha][$coluna] % 2 == 0)
           echo $matriz[$linha][$coluna]."  ";
       else
           echo "__";
    }
    echo "<br>";
}

echo "<br><br><br>";

//IMPRIMIR MATRIZ COM NÚMEROS ÍMPARES
for ($linha=0; $linha<5; $linha++) {
    for ($coluna=0; $coluna<5; $coluna++) {
        if($matriz[$linha][$coluna] % 2 != 0)
           echo $matriz[$linha][$coluna]."  ";
       else
           echo "__";
    }
    echo "<br>";
}

?>