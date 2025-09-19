<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS", "senac");
define("PORT", "3306");
define("BASE", "cadastro");

//criando a conexão MySQLi

$conn = new mysqli(HOST, USER, PASS, BASE, PORT);

if(!$conn){
    die("Falha na conexão".$conn->connect_error);
}else{
    echo "Conexão bem sucedida";
}
?>