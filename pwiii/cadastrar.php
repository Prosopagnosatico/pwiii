<?php
session_start();
require "Usuario.class.php";

$usuario = new Usuario();


if(isset($_POST["nome"])){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $conn = conectar();

    if($conn){
        $user = $usuario->checkUser($email);
        if(!$user){
            $user = $usuario->inserirUsuario($nome, $email, $senha);    
            if($usuario){
                echo"Usuario cadastrado com sucesso";
                $_SESSION["nome"] = $nome;
                header("Location: home.php");
            }else{
                echo"Erro ao cadastrar usuario";
            }            
        }else{
            echo "Usuario ja cadastrado";
            exit();

}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastro de usuarios</h2>
    <form action="" method = "POST">
        <input type="text" name = "nome" placeholder = "Digite o nome: "> <br>
        <input type="text" name = "email" placeholder = "Digite seu email: "> <br>
        <input type="password" name = "senha" placeholder = "Digita sua senha: "> <br>

        <input type="submit" name = "btn" value = "Cadastrar">
    </form>
</body>
</html>


    