<?php
//  DECLARA UMA VARIAVEL COM ESSE EMAIL
$email_cad = $_POST['email'];
$senha_cad = $_POST["senha"];
$nome_cad = $_POST["nome"];
$cep_cad = $_POST["cep"];

if (strlen($email_cad) != 0 && strlen($senha_cad) != 0 && strlen($nome_cad) != 0 && strlen($cep_cad) != 0) {

    //  CONECTA AO BANCO DE DADOS
    include("./conexao.php");

    // CONSULTA SE TEM UM EMAIL IGUAL A O EMAIL DO TESTE
    $sql = mysqli_query($con, "SELECT * FROM dados WHERE email = '{$email_cad}'");

    //  SE O RETORNO FOR MAIOR QUE ZERO, QUER DIZER QUE ESSE EMAIL JÁ ESTÁ CADASTRADO.
    if (mysqli_num_rows($sql) > 0) {

        // usuario invalido

        header("Location: ../erro.html");
    } else {

        // usuario valido
        //inserindo ele na tabela

        $inserir = "INSERT INTO dados VALUES (null, '$nome_cad', '$email_cad', '$senha_cad', '$cep_cad')";
        $result = $con->query($inserir);

        header("Location: acessar.php?email=$email_cad&senha=$senha_cad");        
    }

} else {

    header("Location: ../erro.html");
    
}
