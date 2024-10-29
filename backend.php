<?php 
$nome = $_GET["nome"];
$sobrenome = $_GET["sobrenome"];
$nome_guerra = $_GET["nome_guerra"];
$identidade_militar = $_GET["identidade_militar"];
$usuario = $_GET["usuario"];
$email = $_GET["email"] ?? "Não possui email" ;
$om = $_GET["om"];
$rm = $_GET["rm"];
$pg = $_GET["pg"];
$ar = $_GET["ar"];
echo "Nome: $nome <br>";
echo "Sobrenome: $sobrenome <br>";
echo "Nome de Guerra: $nome_guerra <br>";
echo "Identidade Militar: $identidade_militar <br>";
echo "Usuario do DGP: $usuario <br>";
echo "Email : $email <br>";
echo "Organização Militar: $om <br>";
echo "Região Militar: $rm <br>";
echo "Posto/graduação: $pg <br>";
echo "Situação: $ar <br>";
?>
