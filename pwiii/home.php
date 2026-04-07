<?php
session_start();

if(isse($_SESSION['nome'])){
    $nome = $_SESSION['nome'];
    echo "Eae bro $nome"
} else{
    echo "Tu precisa estar logado pra estar aqui, vai se logar";
}