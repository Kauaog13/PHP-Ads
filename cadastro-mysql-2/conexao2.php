<?php
define("HOST","127.0.0.1");
define("USER","root");
define("PAS","");
define("PORT","3306");
define("BASE","cadastro");


///Criação da cpnexão MySQLi
$conn = new mysqli(HOST,USER,PAS,BASE,PORT);

//testa a conexão
if(!$conn) {
    die("Falha na conexão".$conn->connect_error);
} else {
    echo("Conexão bem sucedida");
}