<?php
require_once 'Views/shared/header.php';
?>

<section class="baner" id="inicio">
    <div class="mascara">
        <div class="container">
            <div class="box-12 mg-t-10">
                <h2 class="fonte60 espaco-letra txt-c fnc-branco mg-t-4">Sua Casa a um clique!</h2>
                <span class="block txt-c fnc-branco uppercase fonte30 fw-300">oportunidade Flávio Coelho Negócios Imobiliários</span>
                <a href="index.php?controller=PainelController&metodo=index" class="btn bg-bege-claro fnc-branco mg-auto mg-t-4 bg-bege-claro-hover">Saiba mais</a>
            </div>
        </div>
    </div>
</section>
<div class="limpar"></div>
<!-- sessão de conquista -->
<section class="conquista mg-t-8">
    <div class="container">
        <h3 class="fonte22 espaco-letra fnc-preto-zaulado fw-300 uppercase txt-c mg-b-4">O que você quer conquistar?</h3>
        <div class="box-12 flex justify-center pd-t-2">
            <div class="comprar">
                <div class="fundo flex justify-center item-centro">
                    <a href="">
                        <h3 class="fonte68 espaco-letra fw-900 fnc-branco fnc-bege-hover captalize">Comprar</h3>
                    </a>
                </div>
            </div>

            <div class="alugar">
                <div class="fundoa flex justify-center item-centro">
                    <a href="">
                        <h3 class="fonte68 espaco-letra fw-900 fnc-branco captalize fnc-azul-celeste-hover">Alugar</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="limpar"></div>

<!-- carregando imoveis disponiveis para compra -->
 <section class="produtos" id="comprar">
    <div class="container">
        <div class="box-12 mg-t-8">
            <h3 class="fonte22 fnc-preto-azulado fw-300 espaco-letra uppercase txt-c mg-b-4">Novas oportunidades</h3>
            <h4 class="fonte46 fnc-preto-azulado espaco-letra uppercase txt-c mg-b-4">Comprar</h4>
        </div>

        <div class="box-12 flex justify-center mg-t-1">
            <div class="box-4 shadow-down pd-b-2">

                <!-- carregar imagem do imovel -->
                <div class="box-12">
                    <img src="../src/lib/img/imagens/casa6.jpg" alt="">
                </div>

                <!-- carregar endereço do imovel -->
                <div class="box-12">
                    <p class="pd-l-2 mg-t-2 fonte28 espaco-letra fw-bold roboto-condensed capitalize fnc-preto-azulado fnc-bege-hover">
                        Rua Jorge Mota, 392
                    </p>
                    <span class="fonte18 fw-400 pd-l-2 mg-t-1">Londrina - PR</span>
                    
                </div>

                <!-- carregar valor do imovel -->
                <div class="box-12">
                    <p class="pd-l-2 mg-t-2 fonte22 fw-400 roboto-condensed fnc-preto-azulado">
                        R$ 580.000,00
                    </p>
                    <div class="divider mg-t-2"></div>
                </div>

                <!-- carregar detalhes do imovel -->
                <div class="box-12 mg-t-2">
                    <div class="box-3 txt-c" title="Quantidade Quartos">         <i class="fa-solid fa-bed fnc-cinza fonte22"></i><br>Quartos</div>
                    <div class="box-3 txt-c" title="Quantidade Banheiros">       <i class="fa-solid fa-bath fnc-cinza fonte22"></i><br>Bnaheiros</div>
                    <div class="box-3 txt-c" title="área total">                 <i class="fa-regular fa-square fnc-cinza fonte22"></i><br>Área total</div>
                    <div class="box-3 txt-c" title="metros quadrados construido"><i class="fa-solid fa-ruler-combined fnc-cinza fonte22"></i><br>Área Construida</div>
                </div>
                <div class="box-12 mg-t-1">
                    <div class="box-3 txt-c fonte16">4</div>
                    <div class="box-3 txt-c fonte16">3</div>
                    <div class="box-3 txt-c fonte16">580</div>
                    <div class="box-3 txt-c fonte16">320</div>
                </div>

            </div>
        </div>
    </div>

</section>

<div class="limpar"></div>
<div class="container wd-100">
    <div class="divider mg-t-8"></div>
</div>    
<!-- carregando imoveis disponiveis para Alugar -->
<section class="produtos" id="alugar">
    <div class="container">
        <div class="box-12 mg-t-8">
            <h3 class="fonte22 fnc-preto-azulado fw-300 espaco-letra uppercase txt-c mg-b-4">Novas oportunidades</h3>
            <h4 class="fonte46 fnc-preto-azulado espaco-letra uppercase txt-c mg-b-4">Alugar</h4>
        </div>

        <div class="box-12 flex justify-center mg-t-1">
            <div class="box-4 shadow-down pd-b-2">

                <!-- carregar imagem do imovel -->
                <div class="box-12">
                    <img src="../src/lib/img/imagens/casa6.jpg" alt="">
                </div>

                <!-- carregar endereço do imovel -->
                <div class="box-12">
                    <p class="pd-l-2 mg-t-2 fonte28 espaco-letra fw-bold roboto-condensed capitalize fnc-preto-azulado fnc-bege-hover">
                        Rua Sinval da Silva Pedra, 107
                    </p>
                    <span class="fonte18 fw-400 pd-l-2 mg-t-1">Londrina - PR</span>
                    
                </div>

                <!-- carregar valor do imovel -->
                <div class="box-12">
                    <p class="pd-l-2 mg-t-2 fonte22 fw-400 roboto-condensed fnc-preto-azulado">
                        R$ 5.000,00
                    </p>
                    <div class="divider mg-t-2"></div>
                </div>

                <!-- carregar detalhes do imovel -->
                <div class="box-12 mg-t-2">
                    <div class="box-3 txt-c" title="Quantidade Quartos">         <i class="fa-solid fa-bed fnc-cinza fonte22"></i><br>Quartos</div>
                    <div class="box-3 txt-c" title="Quantidade Banheiros">       <i class="fa-solid fa-bath fnc-cinza fonte22"></i><br>Bnaheiros</div>
                    <div class="box-3 txt-c" title="área total">                 <i class="fa-regular fa-square fnc-cinza fonte22"></i><br>Área total</div>
                    <div class="box-3 txt-c" title="metros quadrados construido"><i class="fa-solid fa-ruler-combined fnc-cinza fonte22"></i><br>Área Construida</div>
                </div>
                <div class="box-12 mg-t-1">
                    <div class="box-3 txt-c fonte16">4</div>
                    <div class="box-3 txt-c fonte16">3</div>
                    <div class="box-3 txt-c fonte16">580</div>
                    <div class="box-3 txt-c fonte16">320</div>
                </div>

            </div>
        </div>
    </div>
</section>
<div class="limpar"></div>

<!-- carrega a seção de depoimentos dos clientes -->
<section class="depoimentos mg-t-10" id="depoimentos">
    <div class="container">
        <div class="box-12 bg-preto-azulado-escuro flex justify-center item-centro pd-40">
            <div class="carousel">
                <div class="slides">

                    <!-- Slide 1 -->
                    <div class="slide">
                        <p class="box-4 fonte16 fnc-branco txt-center">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                        </p>
                        <cite class="fonte22 fnc-bege fw-600">Ana Carina, Londrina PR</cite>
                    </div>

                    <!-- Slide 2 -->
                    <div class="slide">
                        <p class="box-4 fonte16 fnc-branco txt-center">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                        </p>
                        <cite class="fonte22 fnc-bege fw-600">Gabriel Henrique, Londrina PR</cite>
                    </div>

                    <!-- Slide 3 -->
                    <div class="slide">
                        <p class="box-4 fonte16 fnc-branco txt-center">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                        </p>
                        <cite class="fonte22 fnc-bege fw-600">Victor Hugo, Londrina PR</cite>
                    </div>

                    <!-- Slide 4 -->
                    <div class="slide">
                        <p class="box-4 fonte16 fnc-branco txt-center">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                        </p>
                        <cite class="fonte22 fnc-bege fw-600">Quezia, Londrina PR</cite>
                    </div>                    
                </div>
                <button class="prev"> &#10094; </button>
                <button class="next"> &#10095; </button>
            </div>
        </div>
    </div>
</section>
<div class="limpar"></div>

<section class="paralax">
    <div class="container">
        <div class="box-12 hg-40 pd-40 bg-preto-azulado-escuro"></div>
    </div>
</section>
<div class="limpar"></div>

<!-- Sessão de contato -->
 <section id="contato" class="contato mg-t-8" id="contato">
    <div class="container">
        <div class="box-12 mg-b-6">
            <h3 class="fonte22 fnc-preto-azulado fw-300 espaco-letra uppercase txt-c mg-b-2">
                O Imóvel que você procura esta aqui!
            </h3>
        </div>
        <div class="box-12 flex justify-center item-centro mg-t-4">
            <div class="box-3 txt-c">
                <i class="fa-solid fonte56 fa-phone fnc-bege mg-b-1"></i><br>
                <span class="fonte26 espaco-letra fnc-preto-azulado fw-900"> Telefone</span>
                <p class="fonte16 espaco-letra fw-400 mg-t-2">
                    Ligue <br> 
                    43 99108-0504
                </p>
            </div>
            <div class="box-3 txt-c">
                <i class="fa-solid fa-location-dot fnc-bege fonte56 mg-b-1"></i><br>
                <span class="fonte26 espaco-letra fnc-preto-azulado fw-900"> Localização</span>
                <p class="fonte16 espaco-letra fw-400 mg-t-2">
                    Londrina <br>
                    Paraná
                </p>
            </div>
            <div class="box-3 txt-c">
                <i class="fa-solid fa-envelope fnc-bege fonte56 mg-b-1"></i><br>
                <span class="fonte26 espaco-letra fnc-preto-azulado fw-900"> Email</span>
                <p class="fonte16 espaco-letra fw-400 mg-t-2">Contate-nos via E-mail<br>
                contato@fcnegociosimobiliarios.com.br</p>
            </div>            
            <div class="box-3 txt-c">
                <i class="fa-brands fa-square-instagram fonte50 fnc-bege fnc-azul-celeste-hover mg-r-1 mg-b-1"></i>
                <i class="fa-brands fa-facebook-f       fonte50 fnc-bege fnc-azul-celeste-hover mg-r-2"></i>
                <i class="fa-brands fa-youtube          fonte50 fnc-bege fnc-azul-celeste-hover mg-r-2"></i><br>
                <span class="fonte26 espaco-letra fnc-preto-azulado fw-900">Redes Sociais</span>
            </div>
        </div>
    </div>
 </section>
 <div class="limpar"></div>

 <!-- carregando o formulario de contato -->
 <section class="bg-preto-azulado-claro mg-t-8 pd-t-10 pd-b-8">
    <div class="container">
        <div class="box-6">
            <div class="box-6">
                <h3 class="fonte22 fnc-branco fw-300 espaco-letra uppercase txt-c mg-b-4">
                    seu imovel a um clique!
                </h3>
                <p class="font16 fnc-branco espaco-letra txt-c">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                </p>
            </div>
        </div>
        <!-- formulario de contato -->
         <div class="contato-form box-6">
            <h3 class="fnc-branco fonte22 fw-300 espaco-letra uppercase txt-c mg-b-8">
                contato
            </h3>
            <form action="" method="POST" class="fonte14 fnc-branco">
                <div class="box-6">
                    <label for="">Nome</label>
                    <input type="text" name="nome" class="contato-form">
                </div>

                <div class="box-6">
                    <label for="">Sobre-nome</label>
                    <input type="text" name="sobrenome">
                </div>
                
                <div class="box-12">
                    <label for="">Email</label>
                    <input type="text" name="email">
                </div>

                <div class="box-12 flex justify-start">
                    <div class="box-3 flex justify-start">
                        <label for="">Interesse</label>
                    </div>
                    <div class="box-4 flex justify-start">
                        <span>Comprar</span><input type="radio">
                    </div>
                    <div class="box-4 flex justify-start">
                        <span>Alugar</span><input type="radio">
                    </div>
                </div>

                <div class="box-12">
                    <label for="">Mensagem:</label>
                    <textarea name="" id="" class="fnc-branco mg-t-3"></textarea>
                </div>

                <div class="box-12">
                    <input type="submit" class="btn bg-azul fnc-branco fonte20">
                </div>
            </form>
         </div>
    </div>
 </section>

<?php
    require_once 'Views/shared/footer.php';
?>