<?php

namespace App\Models\Dao;

use App\Models\Conexao;
use App\Models\Proprietario;

    class ProprietarioDao extends Conexao
    {
        public function listarTodos(){
            return $this->listar("proprietario");
        }

        public function listarPorId($id){
            return $this->listar("proprietario", "WHERE ID = ?", [$id]);
        }

        public function adicionar(Proprietario $proprietario): mixed 
        {
                $atributos = array_keys($proprietario->atributosPreenchidos());
                $valores = array_values(array: $proprietario->atributosPreenchidos());

                return $this->inserir(tabela: 'PROPRIETARIO', atributos: $atributos, valores: $valores);
        }

        public function atualizar(Proprietario $proprietario): mixed 
        {
                $atributos = array_keys($proprietario->atributosPreenchidos());
                $valores = array_values(array: $proprietario->atributosPreenchidos());

                return $this->update(tabela: 'PROPRIETARIO', campos: $atributos, valores: $valores, id: $proprietario->getId());
        }

        public function excluir($id): int
        {
            return $this->deletar(tabela: 'PROPRIETARIO', id: $id);

        }
    }

?>