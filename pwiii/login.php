<?php
require "Usuario.class.php";

       $usuario = new Usuario();
$connection = $usuario->conectar();
if($connection){
    if (isset($_POST['email'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
 
        $user = $usuario -> checkUser($email);

        if($user){
            $user = $usuario->checkPass($email, $senha);
            $_SESSION['nome']= $nome;
            header("Location: home.php");
        } else{
            echo "Usuario não cadastrado";
            header("Location:cadastrar.php");
        }

    }

    }else{
    echo "Banco indisponivel, Tente mais tarde";
}