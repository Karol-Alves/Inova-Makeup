<?php


$server = "localhost";
$user = "root";
$pass = "1234";
$bd = "inova";


if (mysqli_connect($server, $user, $pass, $bd)) {
    echo "Conectado!";
} else {
    echo "Erro ao conectar ao banco de dados: ";
}
?>
