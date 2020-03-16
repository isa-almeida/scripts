<?php
$vetor = array(100, 5, 3, 32, 14, 85, 6, 2, 15, 145, 62, 12, 1, 87, 95, 66, 45, 412, 53, 120);

$maior = NULL;
$menor = 1000; //atribuir um numero qualquer maior para comparação

for($i=0; $i<20; $i++){
    if($vetor[$i]>$maior)
        $maior = $vetor[$i];
    
    if($vetor[$i]<$menor)
        $menor = $vetor[$i];
}

echo "O maior número é {$maior} e o menor é {$menor}";


?>