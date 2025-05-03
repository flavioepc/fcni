<?php
    require_once "Views/shared/header.php";
?>

<section class="painel">
    <div class="container-100">

        <!-- criando menu de navegação do painel -->
        <div class="box-2 bg-preto-azulado-escuro hg-full">
            <div class="saudacao bg-bege-claro pd-20 mg-b-2">
                <span class="fonte14">
                <i class="fa-solid fa-handshake fnc-preto-azulado fonte16 mg-r-1"></i>
                    Seja bem vindo usuário
                </span>
            </div>
            <ul class="pd-10">
                <li class="mg-b-2 pd-b-1"> <a href="index.php?controller=ProprietarioController&metodo=listar" class="fonte14 fnc-branco fnc-cinza">
                    <i class="fa-solid fa-user-tie fonte18 mg-r-1"></i> Proprietário
                    </a> 
                </li>
                <li class="mg-b-2 pd-b-1"> <a href="" class="fonte14 fnc-branco fnc-cinza">
                    <i class="fa-solid fa-city fonte18 mg-r-1"></i>Imóvel
                    </a>                 
                </li>
                <li class="mg-b-2 pd-b-1"> <a href="" class="fonte14 fnc-branco fnc-cinza">
                    <i class="fa-solid fa-user fonte18 mg-r-1"></i>Usuário
                    </a>
                </li>
                <li class="mg-b-2 pd-b-1"> <a href="" class="fonte14 fnc-branco fnc-cinza">
                    <i class="fa-solid fa-building-user fonte18 mg-r-1"></i>Tipo de Imóvel
                    </a>
                </li>
                <li class="mg-b-2 pd-b-1"> <a href="" class="fonte14 fnc-branco fnc-cinza">
                    <i class="fa-solid fa-right-from-bracket fonte18 mg-r-1"></i>Logout
                    </a>
                </li>
            </ul>
        </div>
        <!-- fim do menu de navegação -->
        <section class="carregamento">
            <div class="box-10 bg-branco">

                <ul class="wd-100 mg-t-1 flex justify-end">
                    <li class="mg-r-1">
                        <i class="fa-solid fa-house fonte20 fnc-preto-azulado mg-r-1"></i>
                        <a href="index.php?controller=PainelController&&metodo=index" class="fonte114 fnc-preto-azulado">Home Painel</a>
                    </li>
                </ul>

                   <div class="divider mg-t-1 mg-b-2"></div>             

                <?php 
                    if($_GET['controller'] == 'PainelController' && $_GET['metodo'] == 'index'): ?>

                    <?php else: 
                            require_once "Views/".$controller."/".$metodo.".php";
                           endif; 
                    ?>
            </div>
        </section>

    </div>
</section>

