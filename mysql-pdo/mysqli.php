<?php

//mysqli é um metodo de acesso ao banco de dados MYSQL
$severname = "localhost:3309";
$database = "php";
$username = "root";
$password = "";
//criar a conexão 
$conn = mysqli_connect($severname, $username, $password, $database);
//testar a conexão
if(!$conn){
    die("Conexão falhou:". mysqli_connect_error());
}
echo "Deu bom...";
//query de insert
$sql = "INSERT INTO alunos(`nome`,`ultimonome`,`email`)
        VALUES ('Michel', 'Dias', 'mi986@gmail.com');";
//testar o insert
if(mysqli_query($conn, $sql)){
    echo "Registro criado com sucesso!";
}else{
    echo "Error".$sql. "<br>". mysqli_error($conn);
}
mysqli_close($conn);