<?php

namespace App\Models;

class Proprietario
{
    private ?int $id;
    private string $nome;
    private string $contato;
    private string $email;
    private string $sexo;
    private string $endereco;
    private string $numero;
    private string $bairro;
    private string $cidade;
    private string $estado;
    private string $cep;
    private string $ativo;

    public function __construct(?int $id = null, string $nome = '', string $contato = '', string $email = '', string $sexo = '', 
                                string $endereco = '', string $numero = '', string $bairro = '', string $cidade = '', string $estado = '',
                                string $cep = '', string $ativo = '')
    
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->contato = $contato;
        $this->email = $email;
        $this->sexo = $sexo;
        $this->endereco = $endereco;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
        $this->ativo = '1';
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function setId($id): void {
        if ($id !== '' && $id !== null){
            $this->id = (int) $id;
        }
        
    }

    public function __set($chave, $valor): void{
        if(!property_exists($this, $chave)){
            return;
        }

        if ($chave === 'id') {
            if ($valor !== '' && $valor !== null) {
                $this->id = (int) $valor;
            }
            return;
        }

        $this->$chave = $valor;
            
                        
    }

    public function toArray(){
        return [
            'id'      => $this->id,
            'nome'    => $this->nome,
            'contato' => $this->contato,
            'email'   => $this->email,
            'sexo'    => $this->sexo,
            'endereco'=> $this->endereco,
            'numero'  => $this->numero,
            'bairro'  => $this->bairro,
            'cidade'  => $this->cidade,
            'estado'  => $this->estado,
            'cep'     => $this->cep,
            'ativo'   => $this->ativo
        ];
    }
    
    public function atributosPreenchidos()
    {
        return array_filter($this->toArray(), fn($value) => $value !== null && $value !=='');

    }
    
}

?>