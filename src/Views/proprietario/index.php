<div class="box-8">
    <?php if (isset($id) && $id != ''): ?>
        <h2>
            <i class="fa-solid fa-user-tie fonte30 mg-r-1"></i>Atualizar Proprietário
        </h2>
    <?php else: ?>
        <h2>
            <i class="fa-solid fa-user-tie fonte30 mg-r-1"></i>Cadastrar Proprietário
        </h2>
    <?php endif; ?>
</div>
<div class="limpar"></div>

<form action="" method="POST" class="box-12 mg-t-4">

    <div class="box-12 mg-t-2">
        <input type="hidden" name="id" value="<?php if (isset($id) && $id != ''): echo $proprietario[0]->ID; endif;?>">
    </div>

    <div class="box-8">
        <label for="" class="fnc-preto-azulado">Nome</label>
        <input type="text" name="nome" value="<?php if (isset($id) && $id != ''): echo $proprietario[0]->NOME; endif;?>">
    </div>

    <div class="box-4">
        <label for="" class="fnc-preto-azulado">Contato</label>
        <input type="text" name="contato" value="<?php if (isset($id) && $id != ''): echo $proprietario[0]->CONTATO; endif;?>">
    </div>

    <div class="box-4">
        <label for="" class="fnc-preto-azulado">Email</label>
        <input type="text" name="email" value="<?php if (isset($id) && $id != ''): echo $proprietario[0]->EMAIL; endif;?>">
    </div>

    <div class="box-2">
        <label for="" class="fnc-preto-azulado">Sexo</label>
        <select name="sexo" id="">

        <?php if (isset($id) && $id != ''): ?>

            <option value="<?= $proprietario[0]->SEXO; ?>"selected><?php if($proprietario[0]->SEXO == 'M'): echo 'Masculino'; else: echo 'Feminino'; endif; ?></option>
            <option value="F">Feminino</option>
            <option value="M">Masculino</option>

            <?php else: ?>
            <option value="" selected>Selecione uma opção</option>
            <option value="F">Feminino</option>
            <option value="M">Masculino</option>
        <?php endif; ?>
        </select>
    </div>

    <div class="box-12 divider mg-t-3 mg-b-3"><br></div>


    <div class="box-3">
        <label for="" class="fnc-preto-azulado">Endereço</label>
        <input type="text" name="endereco" value="<?php if (isset($id) && $id != ''): echo $proprietario[0]->ENDERECO; endif;?>">
    </div>
    <div class="box-1">
        <label for="" class="fnc-preto-azulado">Número</label>
        <input type="text" name="numero" value="<?php if (isset($id) && $id != ''): echo $proprietario[0]->NUMERO; endif;?>">
    </div>
    <div class="box-3">
        <label for="" class="fnc-preto-azulado">Bairro</label>
        <input type="text" name="bairro" value="<?php if (isset($id) && $id != ''): echo $proprietario[0]->BAIRRO; endif;?>">
    </div>
    <div class="box-3">
        <label for="" class="fnc-preto-azulado">Cidade</label>
        <input type="text" name="cidade" value="<?php if (isset($id) && $id != ''): echo $proprietario[0]->CIDADE; endif;?>">
    </div>
    <div class="box-1">
        <label for="" class="fnc-preto-azulado">Estado</label>
        <input type="text" name="estado" value="<?php if (isset($id) && $id != ''): echo $proprietario[0]->ESTADO; endif;?>">
    </div>
    <div class="box-1">
        <label for="" class="fnc-preto-azulado">Cep</label>
        <input type="text" name="cep" value="<?php if (isset($id) && $id != ''): echo $proprietario[0]->CEP; endif;?>">
    </div>

    <div class="box-12 mg-t-2">
        <input type="submit" value="Cadastrar" class="btn bg-azul fnc-branco">
    </div>

</form>