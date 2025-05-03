<?php

namespace App\Controller;

use App\Models\Dao\ProprietarioDao;
use App\Services\ProprietarioService;
use App\Models\Notifications;
use App\Models\Proprietario;


class ProprietarioController extends Notifications
{
    private $proprietarioService;
    private $proprietarioDao;

    public function __construct()
    {
        $this->proprietarioDao = new ProprietarioDao();
        $this->proprietarioService = new ProprietarioService($this->proprietarioDao);
    }


    function index(): void
    {
        $id = $_GET['id'] ?? null;
        if ($id):
            $proprietario = $this->proprietarioDao->listarPorId($id);
        endif;

        if ($_POST):
            if (empty($_POST['id'])):
                $this->inserir($_POST);
            else:
                $this->atualizar($_POST);
            endif;
        endif;

        require_once "Views/painel/index.php";
    }

    public function inserir($dados): void
    {
        $retorno = $this->proprietarioService->cadastrarProprietario($dados);
        echo $this->success(obj: 'Proprietario', acao: 'Cadastrar', metodo: 'listar');
    }

    function listar(): void
    {
        $proprietario = $this->proprietarioDao->listarTodos();
        require_once "Views/painel/index.php";
    }

    function atualizar($dados): void
    {
        $retorno = $this->proprietarioService->atualizarProprietario($dados);
        echo $this->success('Proprietario', 'Atualizar', 'listar');
    }

    function deleteConfirm()
    {
        $id = $_GET['id'] ?? null;
        if ($id):
            echo $this->confirm(mensagem: 'Excluir', obj: 'Proprietario', nome: '', id: $id,);
        endif;
        require_once "Views/shared/header.php";
    }

    function excluir()
    {
        $id = $_GET['id'] ?? null;
        if ($id):
            $this->proprietarioDao->excluir(id: $id);
            echo $this->success(obj: 'Proprietario', acao: 'Excluido', metodo: 'listar');
        endif;
        require_once "Views/shared/header.php";
    }

    public function alterarStatus(): void{
        $id = $_GET['id'] ?? null;
        $ativo = $_GET['ativo'] ?? null;

        if ($id):
            $proprietario = new Proprietario (
                id: $id, 
                nome: '', 
                contato: '', 
                email: '', 
                sexo: '', 
                endereco: '', 
                numero: '', 
                bairro: '', 
                cidade: '', 
                estado: '', 
                cep: '', 
                ativo: $ativo
            );
            $this->proprietarioDao->atualizar(proprietario: $proprietario);
            #$this->success("Proprietario", "Atualizado", "listar");
        endif;
    }
}
