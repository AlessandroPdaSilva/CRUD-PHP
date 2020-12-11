<?php

$enderecoServer = "localhost";
$username = "root";
$password = "";
$database = "crudtest";

$connect = mysqli_connect($enderecoServer,$username,$password,$database);

if( mysqli_connect_error() ){
    echo "erro na conexao: ".mysqli_connect_error();
}