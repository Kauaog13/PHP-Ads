<?php
include("conexao.php");

//captura dos valores
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$data = $_POST["data"];

//comando para o insert

$sql = "INSERT INTO usuario(`nome`, `senha`, `email`, `cpf`, `data`) VALUES ('$nome', '$senha', '$email', '$cpf', '$data')";


//debug - apresenta a conexao
echo "<pre>$sql</pre>";

//executar
if($conn->query($sql)==TRUE) {
    echo "<script>alert('Cadastro efetuado com sucesso');</script>";
    echo "<script>location.href='cadastro.html';</script>";
}else{
    echo "<script>alert('Erro ao cadastrar. Erro: ".$conn->error."');</script>";
}
$conn->close();