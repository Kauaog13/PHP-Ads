<?php

require_once __DIR__ . '/../conexao/Conexao.php';
require_once __DIR__ . '/../model/Usuario.php';
require_once __DIR__ . '/../dao/UsuarioDAO.php';

class UsuarioController {
    
    public function index() {
        $dao = new UsuarioDAO();
        $usuarios = $dao->readAll();
        require_once __DIR__ . '/../view/home.php';
    }

    public function cadastrar() {
        $d = filter_input_array(INPUT_POST);
        
        if (isset($d['cadastrar'])) {
            $usuario = new Usuario();
            $dao = new UsuarioDAO();

            $usuario->setNome($d['nome']);
            $usuario->setSobrenome($d['sobrenome']);
            $usuario->setIdade($d['idade']);
            $usuario->setSexo($d['sexo']);

            // Tenta criar e redireciona
            if ($dao->createUsuario($usuario)) {
                header("Location: " . dirname($_SERVER['SCRIPT_NAME']) . "/index.php?action=index");
                exit; // CORRIGIDO: Adicionado exit;
            } else {
                // CORRIGIDO: error_log movido para o 'else'
                error_log("Não foi possível cadastrar!");
            }
        }
    }

    public function editar() {
        $d = filter_input_array(INPUT_POST);
        
        if (isset($d['editar'])) { // Assume que o botão de edição terá name="editar"
            $usuario = new Usuario();
            $dao = new UsuarioDAO();

            $usuario->setId($d['id']);
            $usuario->setNome($d['nome']);
            $usuario->setSobrenome($d['sobrenome']);
            $usuario->setIdade($d['idade']);
            $usuario->setSexo($d['sexo']);

            if ($dao->updateUsuario($usuario)) {
                header("Location: " . dirname($_SERVER['SCRIPT_NAME']) . "/index.php?action=index");
                exit; // CORRIGIDO: Adicionado exit;
            } else {
                // CORRIGIDO: error_log movido para o 'else'
                error_log("Não foi possível editar!");
            }
        }
    }

    /**
     * CORRIGIDO:
     * 1. Alterado para ler o 'id' da URL (INPUT_GET) em vez de um formulário (INPUT_POST).
     * 2. Lógica de 'else' e 'exit' aplicada.
     */
    public function deletar() {
        // Pega o ID da URL (ex: index.php?action=deletar&id=5)
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if ($id) {
            $usuario = new Usuario();
            $dao = new UsuarioDAO();
            
            $usuario->setId($id);
            
            if ($dao->deleteUsuario($usuario)) {
                header("Location: " . dirname($_SERVER['SCRIPT_NAME']) . "/index.php?action=index");
                exit; 
            } else {
                error_log("Não foi possível excluir o usuário ID: " . $id);
            }
        } else {
            error_log("Tentativa de exclusão com ID inválido.");
            header("Location: " . dirname($_SERVER['SCRIPT_NAME']) . "/index.php?action=index");
            exit;
        }
    }
}