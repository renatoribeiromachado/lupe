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
                    <img src="<?= base_url(); ?>/public/assets/img/banner-office.png" class="d-block img-fluid desktop" alt="Lupe" style="width:100%">
                    <img src="<?= base_url(); ?>/public/assets/img/banner-office-mobile-1.png" class="d-block img-fluid mobile" alt="Lupe" style="width:100%;">
                </div> 
            </div>  
        </div>     
    </section>  

    <!--section1-->
    <section id="section1">
        <div class="container-fluid">
            <div class="container pt-5 pb-5">
                <div class="row">

                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2"></div>

                    <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8 text-center">
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#000;">Monitore Office 365 de Forma Segura com Lupe Cloud </h1>
                        <p>Embora o Office 365 permita que as empresas sejam mais eficientes, também é um alvo para ataques cibernéticos. Algumas das ameaças mais comuns incluem phishing, ataques de senha, captura de contas e vazamento de dados. Isso pode ser causado por funcionários com privilégios ou ataques externos.</p>
                    </div>
                    
                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2"></div>

                </div>

            </div>
        </div>
    </section>

    <!--section2-->
    <section id="section2">
        <div class="container-fluid" style="background: #fafafa;">
            <div class="container pt-5 pb-5">
                <div class="row">

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <img src="<?= base_url(); ?>/public/assets/img/img-office-1.png" class="d-block img-fluid" alt="Lupe"/>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#000; padding-top:65px;">Integrando ao Office 365</h1>
                        <p>Colete dados do OneDrive, Exchange Online, SharePoint Online, Azure AD, Outlook e Office 365 ATP. Os eventos coletados incluem: </p>
                        <ul>
                            <li>Eventos administrativos do SharePoint;</li> 
                            <li>Atividade de compartilhamento e download de arquivos;</li> 
                            <li>Atividade de e-mail do Outlook;</li> 
                            <li>Eventos de configuração de exchange;</li> 
                            <li>Eventos de autenticação do Azure AD;</li> 
                            <li>Operações de arquivos OneDrive;</li> 
                            <li>Alertas de ameaça atp do Office 365;</li> 
                        </ul>
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
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#000;padding-top:0px;">Detectando Ameaças no 365</h1>
                        <p>Lupe Cloud usa análises baseadas em comportamento para detectar comportamentos suspeitos, como um local de login raro ou um pico de encaminhamentos de e-mails.</p>
                        <p>A integração direta da API com o Office 365, Azure AD e outras fontes de nuvem fornece os registros de eventos relevantes. Lupe Cloud correlaciona eventos com informações contextuais de outros feeds de dados no local.</p>
                        <p>A detecção de ameaças identifica automaticamente anomalias relacionadas durante um período para detectar e priorizar ameaças de alto risco.</p>
                        <p>Contamos com modelos de ameaças semelhantes para detectar ameaças, como phishing e aquisição de contas.</p>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <img src="<?= base_url(); ?>/public/assets/img/img-office-2.png" class="d-block img-fluid" alt="Lupe"/>
                    </div>

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                </div>

            </div>
        </div>
    </section>
    
    <!--section4-->
    <section id="section4">
        <div class="container-fluid" style="background: #fafafa;">
            <div class="container pt-5 pb-5">
                <div class="row">

                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2"></div>

                    <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8 text-center">
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#000;">Monitoramento de todo o ambiente 365 com Lupe Cloud</h1>
                        <p>Embora o Office 365 permita que as empresas sejam mais eficientes, também é um alvo para ataques cibernéticos. Algumas das ameaças mais comuns incluem phishing, ataques de senha, captura de contas e vazamento de dados. Isso pode ser causado por funcionários com privilégios ou ataques externos.</p>
                    </div>
                    
                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2"></div>

                </div>

            </div>
        </div>
    </section>

    <!--section5-->
    <section id="section5">
        <div class="container-fluid">
            <div class="container pt-5 pb-5">
                <div class="row">

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <img src="<?= base_url(); ?>/public/assets/img/img-office-3.png" class="d-block w-100 img-fluid" alt="Lupe"/>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#000;padding-top:0px;">Detecções Prontas da Lupe Cloud 365</h1>
                        <p>A Lupe Cloud coleta dados da Microsoft e enriquece-os com o contexto do usuário e da entidade. Casos de uso comum incluem:</p>
                        
                        <ul>
                            <li>Detectar o comprometimento da conta;</li>
                            <li>Identificar tentativas de phishing;</li>
                            <li>Identifique padrões de e-mail suspeitos;</li>
                            <li>Detectar alterações de permissão de troca não autorizada;</li>
                            <li>Identificar uso indevido de conta privilegiada;</li>
                            <li>Localizar ameaças internas;</li>
                            <li>Identifique eventos de login suspeitos;</li>
                            <li>Detectar ataques de senha;</li>
                            <li>Detectar ameaças avançadas;</li>
                            <li>Detecte compartilhamento de arquivos suspeitos, alterações de permissões  downloads;</li>
                        </ul>
                    </div>

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                </div>

            </div>
        </div>
    </section>
    
</div>

<?php
echo $this->endSection();
?>