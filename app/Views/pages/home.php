<?php
echo $this->extend('templates/layout');
echo $this->section('content');
$pg = 1;
?>
  
<!--Banner-->
<div class="main">
    <section id="section1"> 
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url(); ?>/public/assets/img/banner-home.png" class="d-block img-fluid desktop" alt="Lupe" style="width:100%">
                    <img src="<?= base_url(); ?>/public/assets/img/banner-home-mobile-1.png" class="d-block img-fluid mobile" alt="Lupe" style="width:100%;">
                </div>
            </div> 
        </div>
    </section>  

    <!--section1-->
    <section id="section1">
        <div class="container-fluid">
            <div class="container pt-5 pb-5">
                <div class="row">

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#0abe84;padding-top:50px;">Solucione incidentes<br> de forma otimizada</h1>
                        <p>Encontre e resolva problemas rapidamente com análises avançadas, aprendizado de máquina, comportamento de usuário e alertas em tempo real. Solução completa para monitorar, alertar e responder a incidentes de segurança criados internamente ou externamente. Necessário para monitorar a Proteção de Dados exigido pela LGPD.</p>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <img src="<?= base_url(); ?>/public/assets/img/session1.png" class="d-block w-100 img-fluid" alt="Lupe"/>
                    </div>

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                </div>

            </div>
        </div>
    </section>

    <!--section2-->
    <section id="section2">
        <div class="container-fluid bg-cinza">
            <div class="container pt-5 pb-5">
                <div class="row">

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <img src="<?= base_url(); ?>/public/assets/img/session2.png" class="d-block w-100 img-fluid" alt="Lupe"/>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#406dcd; padding-top:100px;">Gerencie e armazene<br> eventos de segurança</h1>
                        <p>Armazene, colete e realize buscas avançadas, quando necessário, para normativas como PCI, HIPPA e LGPD. Use filtros para indexar eventos, observe tudo em tempo real e arquive tudo para Compliance. Tenha todo o histórico armazenado e centralizado para a LGPD.</p>
                    </div>

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                </div>

            </div>
        </div>
    </section>

    <!--section3-->
    <section id="section3">
        <div class="container-fluid">
            <div class="container pt-5 pb-5">
                <div class="row">

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#ae38b6;padding-top:50px;">Monitore aplicações</h1>
                        <p>Monitore a performance de sua aplicação e entenda a utilização do usuário final e a segurança do código criado para não sofrer com fraudes internas ou de internet. Veja exatamente onde a sua aplicação está gastando tempo, para que você possa corrigir rapidamente problemas e melhorar a satisfação de seus clientes. Obtenha notificações por e-mail e SMS quando algo dá errado ou quando melhorias dão certo.</p>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <img src="<?= base_url(); ?>/public/assets/img/session3.png" class="d-block w-100 img-fluid" alt="Lupe"/>
                    </div>

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                </div>

            </div>
        </div>
    </section>

    <!--section4-->
    <section id="section4">
        <div class="container-fluid bg-cinza">
            <div class="container pt-5 pb-5">
                <div class="row">

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <img src="<?= base_url(); ?>/public/assets/img/session4.png" class="d-block w-100 img-fluid" alt="Lupe"/>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#ffa835;padding-top:80px;">Monitoração de<br> Infraestrutura e Cloud</h1>
                        <p>Excelente solução para monitorar infraestrutura local ou de nuvem de servidores, aplicações internas ou do negócio, para que esteja sempre atento a necessidade de crescimento ou problemas de paralisação de ambiente. Investigue o desempenho atual e histórico por CPU, memória ou tráfego de rede.</p>
                    </div>

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                </div>

            </div>
        </div>
    </section>

    <!--section5-->
    <section id="solucao">
        <div class="container-fluid">
            <div class="container mt-5 pb-5">

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                        <h1 class="fs-3 fw-bold text-center" style="color:#000;">Conheça nossas soluções:</h1>
                    </div>
                </div>
                <div class="row mt-5">

                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2"></div>

                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                        <img src="<?= base_url(); ?>/public/assets/img/icone1-5.png" class="mx-auto d-block img-fluid" alt="Lupe"/>
                        <h4 class="fw-bold text-center" style="color:#000;margin-top:7px;">Plataforma <br>completa</h4>
                        <p class="text-center">Todas as ferramentas em um só lugar, todas funcionalidades em uma única plataforma.</p>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                        <img src="<?= base_url(); ?>/public/assets/img/icone2-5.png" class="mx-auto d-block img-fluid" alt="Lupe" style="margin-top:13px;"/>
                        <h4 class="fw-bold text-center" style="color:#000;margin-top:21px;">Valores <br>em reais</h4>
                        <p class="text-center">Sem surpresas com variação cambial, nossa solução é entregue com valores em reais.</p>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                        <img src="<?= base_url(); ?>/public/assets/img/icone3-5.png" class="mx-auto d-block img-fluid" alt="Lupe"/>
                        <h4 class="fw-bold text-center" style="color:#000;margin-top:2px;">Suporte <br>nacional</h4>
                        <p class="text-center">Time de especialistas para auxiliar com o suporte técnico, sempre que for necessário.</p>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                        <img src="<?= base_url(); ?>/public/assets/img/icone4-5.png" class="mx-auto d-block img-fluid" alt="Lupe"/>
                        <h4 class="fw-bold text-center" style="color:#000;margin-top:8px;">Pagamento<br> mensal </h4>
                        <p class="text-center">Não precisa mais se preocupar com o budget transferido para 2021, utilize a OPEX para ter a solução.</p>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2"></div>

                </div>

            </div>
        </div>
    </section>

</div>

<?php
echo $this->endSection();
?>