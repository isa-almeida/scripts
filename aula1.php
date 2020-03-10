<?php

/* 
Questão 1: Ler 2 valores, no caso variáveis A e B. Efetuar a soma das variáveis A e B implicando seu resultado 
na variável X após a soma dos dois valores indicados.
Questão 2: A fórmula para calcular a área de uma circunferência é A = pi*R^2, sendo o valor de pi = 3.14159. 
Basta ler 1 valor para raio, efetuar calculo elevando r ao quadrado e multiplicando por pi. 
Apresentar resposta em A
Questão 3: Ler duas variáveis A e B, calcular o produto entre elas e atribua a variável PROD. Mostrar a 
seguir mensagem PRDO com o resultado;
Questão 4: Ler variáveis A e B, correspondendo a duas notas de aluno. Calcular a média, sabendo que a nota A tem
 peso 3.5 e a nota B peso 7.5


echo "Exercicio 1<br><br>";

$A = 2;

$B = 3;

$X = $A+$B;

echo "Valor 1 = ".$A;
echo "<br><br>Valor 2 = ".$B;

echo "<br><br>Soma = ".$X;

?>
//////////////////////////////////////////////////////////////

echo "Exercicio 2<br><br>";

$pi = 3.14159;
echo "Pi = ".$pi."<br><br>";
$raio = 3;

echo "Raio = ".$raio;

echo "<br><br>A área é: ".$pi * (pow($raio, 2));
para elevar ao quadrado, a partir do php 5, basta colocar ** e em seguida o número do expoente. exemplo: ($pi ** 2);
também é possível usar a função pow.
?>
//////////////////////////////////////////////////////////////

echo "Exercicio 3<br><br>";

$varA = 5;
$varB = 10;

echo "Variável A = ".$varA."<br>Variável B = ".$varB;

$prod = $varA * $varB;

echo "<br><br>Produto: ".$prod;

?>
//////////////////////////////////////////////////////////////

echo "Exercicio 4<br><br>";

$notaA = 10;

$notaB = 8;

$media = (($notaA * 0.35) + ($notaB * 0.75)) / 2;

echo "Nota A: ".$notaA;
echo "<br>Nota B: ".$notaB;
echo "<br><br>Média: ".$media;

*/

?>