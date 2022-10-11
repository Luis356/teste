<?php

@$login = trim($_GET["email"]); 
@$senha = trim($_GET["senha"]);

if (strlen($login) == 0 || strlen($senha) == 0) {
    echo "erro - lenght";    
    exit(0);
}

include("conexao.php");

$sql = "SELECT * FROM dados WHERE email='$login' AND senha='$senha'";
$result = $con->query($sql);

if ($result->num_rows == 1) {

    setcookie("usuario", "$login");
    setcookie("senha", "$senha");
    header("Location: restrita.php");
    exit(0);

} else {

echo "erro - num_rows";    
    exit(0);

}