<?php

class UsuarioDAO {

    private PDO $pdo;

    public function __construct() {
        $this->pdo = Conexao::getConexao();
    }

    public function readAll(): array {
        $sql = "SELECT id, nome, sobrenome, idade, sexo FROM usuario ORDER BY id DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * CORRIGIDO:
     * 1. Removida a coluna 'id' do INSERT, pois ela é auto_increment.
     * 2. A lista de colunas (4) agora corresponde aos valores (4).
     */
    public static function createUsuario(Usuario $usuario) {
        try {
            $sql = "INSERT INTO usuario(nome, sobrenome, idade, sexo)
                    VALUES(:nome, :sobrenome, :idade, :sexo)";
            
            $p_sql = Conexao::getConexao()->prepare($sql);
            
            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":sobrenome", $usuario->getSobrenome());
            $p_sql->bindValue(":idade", $usuario->getIdade());
            $p_sql->bindValue(":sexo", $usuario->getSexo());
            
            return $p_sql->execute();

        } catch (Exception $e) {
            print "Erro ao inserir um usuário: <br>" . $e . '<br>';
        }
    }

    /**
     * CORRIGIDO:
     * 1. A consulta SQL 'order by' precisava de uma coluna (ex: 'id asc').
     * 2. O loop foreach estava quebrado (adicionava itens à mesma lista que estava a ler).
     * Agora, ele adiciona os objetos ao array '$f_lista' corretamente.
     */
    public function readUsuario() {
        try {
            $sql = "select * from usuario order by id asc"; // Corrigido
            $result = Conexao::getConexao()->prepare($sql);
            $result->execute(); // Adicionado execute()
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $l) {
                $f_lista[] = $this->listaUsuarios($l); // Corrigido
            }
            return $f_lista;

        } catch (Exception $e) {
            print "Erro ao recuperar usuário: <br>" . $e . '<br>';
        }
    }

    private function listaUsuarios($row) {
        $usuario = new Usuario();
        $usuario->setId($row['id']);
        $usuario->setNome($row['nome']);
        $usuario->setSobrenome($row['sobrenome']);
        $usuario->setIdade($row['idade']);
        $usuario->setSexo($row['sexo']);

        return $usuario;
    }

    /**
     * CORRIGIDO:
     * 1. Adicionado o bindValue faltante para ':id' na cláusula WHERE.
     * 2. Removido o bindValue duplicado de ':nome'.
     */
    public static function updateUsuario(Usuario $usuario) {
        try {
            $sql = "update usuario set
                nome = :nome,
                sobrenome = :sobrenome,
                idade = :idade,
                sexo = :sexo
                where id = :id";

            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nome", $usuario->getNome());
            // Removido bind duplicado
            $p_sql->bindValue(":sobrenome", $usuario->getSobrenome());
            $p_sql->bindValue(":idade", $usuario->getIdade());
            $p_sql->bindValue(":sexo", $usuario->getSexo());
            $p_sql->bindValue(":id", $usuario->getId()); // Adicionado
            
            return $p_sql->execute();

        } catch (Exception $e) {
            print "Erro ao atualizar um usuário: <br>" . $e . '<br>';
        }
    }

    /**
     * Este método estava correto, mas foi mantido
     * para consistência (instância vs estático).
     */
    public function deleteUsuario(Usuario $usuario) {
        try {
            $sql = "delete from usuario where id = :id";
            $p_sql = $this->pdo->prepare($sql); // Use $this->pdo
            $p_sql->bindValue(":id", $usuario->getId());
            return $p_sql->execute();

        } catch (Exception $e) {
            print "Erro ao deletar um usuário: <br>" . $e . '<br>';
        }
    }
}