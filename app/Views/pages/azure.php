<?php
echo $this->extend('templates/layout');
echo $this->section('content');
?>
  
<!--Banner-->
<div class="main">
    <section id="section1"> 
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url(); ?>/public/assets/img/banner-azure.png" class="d-block img-fluid desktop" alt="Lupe" style="width:100%">
                    <img src="<?= base_url(); ?>/public/assets/img/banner-azure-mobile-1.png" class="d-block img-fluid mobile" alt="Lupe" style="width:100%;">
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
                        <img src="<?= base_url(); ?>/public/assets/img/img-azure-1.png" class="d-block w-100 img-fluid" alt="Lupe"/>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#000; padding-top:0px;">Como é que monitoramos o Azure</h1>
                        <p>A Lupe Cloud coleta todos os dados do Microsoft Azure, desde o contexto de usuário até o de entidade. Dessa forma, os dados são analisados pela investigação criada no cenário. Dentro da investigação, criamos:</p>
                        
                        <ul>
                            <li>Detecção de instâncias suspeitas, uso de recursos e alterações de permissão;</li>  
                            <li>Detecção de comprometimento de contas administrativas;</li> 
                            <li>Identificar tentativas de phishing;</li> 
                            <li>Identificar padrões de e-mails suspeitos;</li> 
                            <li>Detectar alterações de permissão de conta não autorizada;</li> 
                            <li>Detectar compartilhamento de credenciais;</li> 
                            <li>Identificar uso indevido de conta privilegiada;</li> 
                            <li>Identifique eventos de login suspeitos;</li> 
                            <li>Detectar ataques de senha.</li> 
                        </ul>
                    </div>

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                </div>

            </div>
        </div>
    </section>
    
    <!--section2-->
    <section id="section2">
        <div class="container-fluid">
            <div class="container pt-5 pb-5">
                <div class="row">

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#000;padding-top:0px;">Como Integramos o Azure</h1>
                        <p>A Lupe Cloud tem integração completa por API com vários componentes do Microsoft Azure. A integração com Azure fornece:</p>
                        <ul>
                            <li>Alertas de segurança do Windows Defender e do Azure;</li>
                            <li>Azure AD, acesso ao Azure e registros de gerenciamento de identidade;</li>
                            <li>Registros administrativos do Azure (criação de instâncias, alterações de privilégios e outros);</li>
                            <li>Lupe Office 365, Windows Defender e Azure Sentinel;</li>
                            <li>Eventos de autenticação do Azure AD;</li>
                            <li>Saúde de recursos e serviços do Azure.</li>
                        </ul>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <img src="<?= base_url(); ?>/public/assets/img/img-azure-2.png" class="d-block w-100 img-fluid" alt="Lupe"/>
                    </div>

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                </div>

            </div>
        </div>
    </section>

     <!--section3-->
    <section id="section3">
        <div class="container-fluid" style="background: #fafafa;">
            <div class="container pt-5 pb-5">
                <div class="row">

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <img src="<?= base_url(); ?>/public/assets/img/img-azure-3.png" class="d-block w-100 img-fluid" alt="Lupe"/>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#000; padding-top:0px;">Como Detectamos Ameaças</h1>
                        <p>Encontrar padrões baseados em série de anomalias é fundamental, e a Lupe Cloud usa investigações prontas para detectar condutas suspeitas, como um pico de encaminhamento de e-mails ou um local raro de login.</p>
                        <p>A Lupe Cloud conta com uma integração direta de API com o Azure AD e outras fontes da nuvem, dessa forma, obtendo os registros de eventos relevantes.</p>
                        <p>A correlação de eventos acontece com informações contextuais de outros feeds de dados no local, como lista de observação do Active Directory.</p>
                        <p>A detecção de ameaças da Lupe Cloud reúne automaticamente anomalias relacionadas durante um período, para detectar e priorizar ameaças de alto risco.</p>
                    </div>

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                </div>

            </div>
        </div>
    </section>
    
    <!--section4-->
    <section id="section4">
        <div class="container-fluid">
            <div class="container pt-5 pb-5">
                <div class="row">

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#000;padding-top:50px;">Painéis Prontos para Monitoramento do Azure</h1>
                        <p>Com os Dashboards da Lupe Cloud é possível visualizar todo o seu ambiente de Azure, dessa forma, você pode monitorar eventos e violações.</p>
                        <p>Conte com o monitoramento e visibilidade completa, para prevenir o seu ambiente de ameaças internas e avançadas.</p>
                        <p>Nossos painéis são compartilháveis e podem ser personalizados de acordo com a sua necessidade.</p>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <img src="<?= base_url(); ?>/public/assets/img/img-azure-4.png" class="d-block w-100 img-fluid" alt="Lupe"/>
                    </div>

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                </div>

            </div>
        </div>
    </section>
    
    <!--section5-->
    <section id="section5">
        <div class="container-fluid" style="background: #fafafa;">
            <div class="container mt-2 pb-5">

                <div class="row pt-5">
                    
                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2"></div>
                    
                    <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8 text-center">
                        <h1 class="fs-3 fw-bold" style="color:#000;">Veja o que protegemos no Azure</h1>
                        <p>Microsoft Azure é a escolha de muitas empresas e como uma grande nuvem pública, existem muitos pontos que as empresas precisam monitorar. Com uma ampla superfície de ataque a ser explorada por meio de identidade, malware, phishing e outras ameaças avançadas. É imprescindível priorizar e identificar os pontos corretos para proteger sua implantação Azure. </p>
                    </div>
                    
                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2"></div>
                    
                </div>
                <div class="row mt-5">

                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2"></div>

                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                        <img src="<?= base_url(); ?>/public/assets/img/icone1-azure.png" class="mx-auto d-block img-fluid" alt="Lupe"/>
                        <p class="text-center" style="margin-top:10px;">Identifique a<br> movimentação de dados confidenciais e a atividade de login suspeita.</p>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                        <img src="<?= base_url(); ?>/public/assets/img/icone2-azure.png" class="mx-auto d-block img-fluid" alt="Lupe" style="margin-top:13px;"/>
                        <p class="text-center" style="margin-top:15px;">Monitore <br>atividades não autorizadas e/ou inesperadas.</p>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                        <img src="<?= base_url(); ?>/public/assets/img/icone3-azure.png" class="mx-auto d-block img-fluid" alt="Lupe"/>
                        <p class="text-center" style="margin-top:7px;">Detecte o uso<br> indevido de privilégios ou compromisso.</p>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                        <img src="<?= base_url(); ?>/public/assets/img/icone4-azure.png" class="mx-auto d-block img-fluid" alt="Lupe"/>
                        <p class="text-center" style="margin-top:22px;">Detectar<br> compartilhamento não autorizado e exfiltração de dados.</p>
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