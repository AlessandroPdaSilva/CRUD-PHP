<?php
// ************* update **************
require_once "connect_db.php";
require_once "clearInput.php";
if( isset($_POST['btn-editar']) ){// botao editar
    
    $id = mysqli_escape_string($connect, $_POST['id']);
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);

    $sql = "UPDATE clientes SET nome = '$nome' , sobrenome = '$sobrenome' , email = '$email' , idade = '$idade' WHERE id = '$id' ";


    if(mysqli_query($connect , $sql) ){// enviar edit
        echo " editado com sucesso";
        header("location: ../index.php");
    }
    
}