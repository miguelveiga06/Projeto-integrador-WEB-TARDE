<?php
$host = "localhost"; // ou o seu host
$user = "root"; // seu usuário do banco
$password = ""; // sua senha do banco
$dbname = "pagmais"; // nome do banco de dados

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>