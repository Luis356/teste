<?php
$usuario = $_COOKIE["usuario"];
$senha = $_COOKIE["senha"];

include_once("conexao.php");

$sql = "SELECT * FROM dados WHERE email = '$usuario'  AND  senha = '$senha'";
$result = $con->query($sql);

if ($result->num_rows != 1) {

    header("Location: Erro.php");
    exit(0);

}