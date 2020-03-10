<?php

/*
$nome = "<script> var nome = prompt('Insira o nome'); document.write(nome)</script>";
$endereco = "<script> var endereco = prompt('Insira o endereço'); document.write(endereco)</script>";
$telefone = "<script> var tel = prompt('Insira o endereço'); document.write(telefone)</script>";
echo $nome;
echo $endereco;

$pessoa = array('Nome'=> "<script> var nome = prompt('Insira o nome'); document.write(nome)</script>",
 'Endereco'=>'Rua do João', 'Estado'=>'SP');

$var1 = 12;
$pessoa1 = array(array("$var1", "13"), array("Carla", "14"));

echo $pessoa1[0][1];


$infoPessoas = array();
$infoPessoas[0]['Nome'] = $_REQUEST['nome'];
$infoPessoas[1]['Endereco'] = $_REQUEST['endereco'];
$infoPessoas[2]['Telefone'] = $_REQUEST['telefone'];
print_r($infoPessoas);
*/
$nome = array();

$nome = $_REQUEST['nomes'];

print_r($nome);
?>