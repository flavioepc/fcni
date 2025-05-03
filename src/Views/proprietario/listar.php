<div class="wd-100">
    <div class="box-8">
        <h2><i class="fa-solid fa-user-tie fonte30 mg-r-1"></i>Proprietario</h2>
    </div>

    <a href="index.php?controller=ProprietarioController&metodo=index">
            <div class="box-4 flex justify-center item-centro">
                <div class="wd-30 radius-start bg-azul-escuro pd-10 fnc-branco fonte14">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="wd-50 radius-end bg-azul pd-10 fnc-branco fonte14">
                    Novo Cadastro
                </div>
            </div>
    </a>
</div>
<div class="limpar"></div>

<table class="grid wd-100 mg-t-4">
    <thead>
        <tr>
            <th class="fonte14 espaco-letra fw-bold">Codigo</th>
            <th class="fonte14 espaco-letra fw-bold">Nome</th>
            <th class="fonte14 espaco-letra fw-bold">Contato</th>
            <th class="fonte14 espaco-letra fw-bold">Sexo</th>
            <th class="fonte14 espaco-letra fw-bold">E-mail</th>
            <th class="fonte14 espaco-letra fw-bold">Cidade</th>
            <th class="fonte14 espaco-letra fw-bold">Ativo</th>
            <th class="fonte14 espaco-letra fw-bold">Ações</th>
        </tr>
    </thead>

    <tbody>
        <?php
        #var_dump($proprietario);
            if(isset($proprietario) && count($proprietario) > 0):
                foreach($proprietario as $valores):
        ?>

            <tr class="zebra">
                <td class="fonte14 espaco-letra fw-300 txt-c"><?= $valores->ID;?></td>
                <td class="fonte14 espaco-letra fw-300 txt-c"><?= $valores->NOME;?></td>
                <td class="fonte14 espaco-letra fw-300 txt-c"><?= $valores->CONTATO;?></td>
                <td class="fonte14 espaco-letra fw-300 txt-c"><?php if($valores->SEXO == 'M'): echo 'Masculino'; else: echo 'Feminino'; endif; ?></td>
                <td class="fonte14 espaco-letra fw-300 txt-c"><?= $valores->EMAIL; ?></td>
                <td class="fonte14 espaco-letra fw-300 txt-c"><?= $valores->CIDADE; ?></td>


                
                
                <td class="txt-c">
                    <?php if($valores->ATIVO == '1'): ?>
                        <span class="ativo" data-id="<?=$valores->ID;?>" data-status="0">
                            <i class="fa-solid fa-lock-open fonte16 fnc-sucesso"></i>
                        </span>
                        
                    <?php else: ?> 
                        <span class="ativo" data-id="<?=$valores->ID;?>" data-status="1">
                        <i class="fa-solid fa-lock fonte16 fnc-error"></i>
                        </span>                           
                    <?php endif; ?>
                </td>

                <td class="flex justify-center item-centro">
                    <a href="index.php?controller=ProprietarioController&metodo=deleteConfirm&id=<?=$valores->ID;?>">
                        <i class="fa-solid fa-trash-can fonte14 mg-r-2 fnc-preto-azulado"></i>
                    </a>
                    <a href="index.php?controller=ProprietarioController&metodo=index&id=<?=$valores->ID;?>">
                        <i class="fa-solid fa-pen fonte14 fnc-azul"></i>
                    </a>
                </td>
            </tr>

        <?php endforeach; else: ?>
            <h1> Nenhum registro na base de dados </h1> 
        <?php endif; ?>

    </tbody>

    <tfooter>

    </tfooter>
</table>