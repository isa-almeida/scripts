<?php
$vetor = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);

$maior = NULL;
$menor = 1000; //atribuir um numero qualquer maior para comparação
$contador = NULL;
$par = NULL;

for($i=0; $i<20; $i++){
    if($vetor[$i]>$maior)
        $maior = $vetor[$i];
    
    if($vetor[$i]<$menor)
        $menor = $vetor[$i];

    $contador += $vetor[$i]; //contador para calcular a soma dos elementos

    if($vetor[$i] % 2 == 0)
        $par++;
}

echo "O maior número é {$maior} e o menor é {$menor}<br>";
echo "A soma dos elementos é {$contador}<br>";
echo "A porcentagem de números pares é de ".((100*$par)/20)."%";

//x= (100*10)/20


?>