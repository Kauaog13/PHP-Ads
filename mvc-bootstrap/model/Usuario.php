<?php

class Usuario{
    private $id;
    private $nome;
    private $sobrenome;
    private $idade;
    private $sexo;

    // Getter e Setter para $id
public function getId() {
    return $this->id;
}

public function setId($id) {
    $this->id = $id;
}

// Getter e Setter para $nome
public function getNome() {
    return $this->nome;
}

public function setNome($nome) {
    $this->nome = $nome;
}

// Getter e Setter para $sobrenome
public function getSobrenome() {
    return $this->sobrenome;
}

public function setSobrenome($sobrenome) {
    $this->sobrenome = $sobrenome;
}

// Getter e Setter para $idade
public function getIdade() {
    return $this->idade;
}

public function setIdade($idade) {
    $this->idade = $idade;
}

// Getter e Setter para $sexo
public function getSexo() {
    return $this->sexo;
}

public function setSexo($sexo) {
    $this->sexo = $sexo;
}

}
