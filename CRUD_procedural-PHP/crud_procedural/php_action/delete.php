<?php

require_once "connect_db.php"; 

require_once "clearInput.php";


$id = mysqli_escape_string($connect, $_POST['id']);
$sql = "DELETE FROM clientes WHERE id = '$id' ";



if(mysqli_query($connect,$sql) ){
    
    header("location: ../index.php");
}