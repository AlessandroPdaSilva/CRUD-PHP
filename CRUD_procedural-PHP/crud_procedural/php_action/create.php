<?php

// ******** create ***********

include_once "connect_db.php";
session_start();


// escape de script
require_once "clearInput.php";

if( isset($_POST['btn-cadastro']) == true ){// botao cadastar clicado
    
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);

    if( empty($_POST['nome']) || empty($_POST['sobrenome']) || empty($_POST['email']) || empty($_POST['idade'])){// campo vazio 
        echo " erro ao cadastrar ";

    }else{

        $sql = " INSERT INTO clientes (nome,sobrenome,email,idade) VALUES ('$nome','$sobrenome','$email','$idade')" ;

        if( mysqli_query($connect,$sql)){// inserindo no banco
            echo " inserido com sucesso";
            header("location: ../index.php");
        }else{
            header("location: ../index.php");
        }
        


    }


}