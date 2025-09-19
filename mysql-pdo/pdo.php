<?php

//mysqli é um metodo de acesso ao banco de dados MYSQL
$severname = "localhost:3309";
$database = "php";
$username = "root";
$password = "";
$sql = "mysql:host=$severname; dbname=$database;";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
//TESTAR CONEXÃO
try{
    $my_Db_Connection = new PDO($sql, $username, $password, $dsn_Options);
    echo "Conexão realizada com sucesso!";
} catch(PDOException $e){
    echo "Conexão com erro:".$e->getMessage();
}

//criar as variaveis para inserts 
$nome = "Teste";
$ultimonome = "teste";
$email = "teste@teste";
//antes de inserir preparamos o insert - preparamant statment
$my_Insert_Statement = $my_Db_Connection->prepare( "INSERT INTO alunos(`nome`,`ultimonome`,`email`)
                                                            VALUES (:nome, :ultimonome, :email)");
//bind - é um processo de segurança para armazenar corretamente o valor da variavel
$my_Insert_Statement->bindParam(":nome", $nome);
$my_Insert_Statement->bindParam(":ultimonome", $ultimonome);
$my_Insert_Statement->bindParam(":email", $email);
//testar o registro
if($my_Insert_Statement->execute()){
    echo "Registro criado com sucesso";
}else{
    echo "Deu ruim...";
}

