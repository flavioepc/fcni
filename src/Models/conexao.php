<?php
namespace App\Models;

use PDOException;
use PDO;

class Conexao 
{

    private static $conexao;

    // criando a conexao com o banco de dados utilizando o PDO
    protected function getConexao(): mixed
    {
    
        if(self::$conexao === null):
            $inf = "mysql:host=localhost;dbname=fcni";
            try {
                self::$conexao = new PDO($inf, "root", "", [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
                self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch(PDOException $e) {
                die('Erro ao conectar com o banco de dados '. $e->getMessage());
            }
        endif;
        return self::$conexao;
    }
    // metodo responsavel por fechar a conexão com o banco de dados
    protected static function closeConexao(): void{
        self::$conexao = null;
    }

    protected function executarConsulta($sql, $valores = []): mixed {
        try {
            $stmt = self::getConexao()-> prepare($sql);
            foreach($valores as $key => $valor):
                $stmt->bindValue($key + 1, $valor);
            endforeach;
            $stmt->execute();
            return $stmt;

        } catch (PDOException $e){
            die('Erro ao executar a consulta no bandco de dados. '.$e->getMessage());
        }
    }

    // Criando função responsavel por listar um objeto do banco de dados

    protected function listar($tabela, $condicao = "", $parametro = []): mixed {
        $sql = "SELECT * FROM {$tabela} {$condicao} ORDER BY ID DESC";
        $stmt = $this->executarConsulta($sql, $parametro);
        return $stmt-> fetchAll(PDO::FETCH_OBJ);
    }

    // Criando a Função responsavel por inserir um objeto no banco de dados

    protected function inserir($tabela, $atributos, $valores): mixed {
        $sql = "INSERT INTO {$tabela} (" .implode(",", $atributos) . ")
        VALUE(" . implode(",", array_fill(0, count($valores), "?")).")";


        $stmt = $this->executarConsulta($sql, $valores);
        return self::getConexao()->lastInsertId();
    }

    // criando a função responsavel por atualizar um objeto no banco de dados

    protected function update($tabela, $campos, $valores, $id): mixed {
        # UPDATE PROPRIETARIO SET NOME = BELTRANO WHERE ID = 1;
        $set = implode(',', array_map(fn($campo): string => "$campo = ?", $campos));
        $sql = "UPDATE {$tabela} SET {$set} WHERE ID = ?";
        $stmt = $this->executarConsulta($sql, array_merge($valores, [$id]));
        return $stmt->rowCount();
    }

    // criando a função responsavel por excluir um objeto no banco de dados

    protected function deletar($tabela, $id): int 
    {
        # DELETE PROPRIETARIO WHERE ID = 1;
        $sql = "DELETE FROM {$tabela} WHERE ID = ? LIMIT 1";
        // return $sql
        $stmt = $this->executarConsulta($sql, [$id]);
        return $stmt->rowCount();
    }

}
?>