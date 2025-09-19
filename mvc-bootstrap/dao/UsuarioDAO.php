<?php

class UsuarioDAO{

    public static function createUsuario(Usuario $usuario){

        try{
            $sql = "INSERT INTO usuario(`id`,`nome`,`sobrenome`,`idade`,`sexo`)
            VALUES(:nome,:sobrenome,:idade,:sexo)";

            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":sobrenome", $usuario->getSobrenome());
            $p_sql->bindValue(":idade", $usuario->getIdade());
            $p_sql->bindValue(":sexo", $usuario->getSexo());
            
            return $p_sql->execute();
            
        }catch(Exception $e){
            print "Erro ao inserir um usuário <br>".$e.'<br>';
        }
    }
    
    public function readUsuario(){
        try{
            $sql="select * from usuario order by nome asc";
            $result = Conexao::getConexao()->prepare($sql);
            $lista=$result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach($lista as $l){
                $f_lista[]= $this->listaUsuarios($l);
            }
            return $f_lista;
        
            
        
        }catch(Exception $e){
            print "Erro ao recuperar um usuário <br>".$e.'<br>';
        }
    }
}