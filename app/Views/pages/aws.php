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
                    <img src="<?= base_url(); ?>/public/assets/img/banner-aws.png" class="d-block img-fluid desktop" alt="Lupe" style="width:100%">
                    <img src="<?= base_url(); ?>/public/assets/img/banner-aws-mobile-1.png" class="d-block img-fluid mobile" alt="Lupe" style="width:100%;">
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
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#000;padding-top:0px;">O Que Monitoramos na AWS</h1>
                        <p>O monitoramento de segurança da Lupe Cloud monitora vários componentes da AWS. entre eles:</p>
                        
                        <ul>
                            <li>Eventos de login de Administradores e Usuários;</li>
                            <li>Eventos de configuração do Amazon Elastic Compute Cloud (EC2);</li>
                            <li>Registros de balanceamento de carga elástica (ELB);</li>
                            <li>Registros de conexão do Amazon Virtual Private Cloud (VPC);</li>
                            <li>Atividades de Gerenciamento de Identidade e Acesso (IAM) da AWS;</li>
                            <li>AWS CloudTrail Registros de atividades da API;</li>
                            <li>Logs de infraestrutura do Amazon CloudWatch;</li>
                            <li>Amazon GuardDuty com alerta integração;</li>
                            
                        </ul>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <img src="<?= base_url(); ?>/public/assets/img/img-aws-1.png" class="d-block w-100 img-fluid" alt="Lupe"/>
                    </div>

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                </div>

            </div>
        </div>
    </section>
    
    <!--section2-->
    <section id="section2">
        <div class="container-fluid">
            <div class="container mt-5 pb-5">

                <div class="row" id="solucao">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                        <h1 class="fs-3 fw-bold text-center" style="color:#000;">Como Resolvemos o Problema De Forma Rápida</h1>
                    </div>
                </div>
                <div class="row mt-5">

                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2"></div>
 
                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                        <img src="<?= base_url(); ?>/public/assets/img/icone1-aws.png" class="mx-auto d-block img-fluid" alt="Lupe"/>
                        <h5 class="fw-bold text-center" style="color:#000;margin-top:7px;">Integração <br>Simplificada</h5>
                        <p class="text-center">A integração de API de vários pontos permite coletar eventos relevantes de diversas fontes de dados.</p>
                    </div>
 
                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                        <img src="<?= base_url(); ?>/public/assets/img/icone2-aws.png" class="mx-auto d-block img-fluid" alt="Lupe" style="margin-top:13px;"/>
                        <h5 class="fw-bold text-center" style="color:#000;margin-top:0px;">Comportamento de <br>Usuário</h5>
                        <p class="text-center">Os eventos são enriquecidos com contexto adicional de padrões de usuários.</p>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                        <img src="<?= base_url(); ?>/public/assets/img/icone3-aws.png" class="mx-auto d-block img-fluid" alt="Lupe"/>
                        <h5 class="fw-bold text-center" style="color:#000;margin-top:18px;">Detecção de<br> Ameaças</h5>
                        <p class="text-center">Detecte padrões de comportamento suspeitos que indicam uma ameaça avançada.</p>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                        <img src="<?= base_url(); ?>/public/assets/img/icone4-aws.png" class="mx-auto d-block img-fluid" alt="Lupe"/>
                        <h5 class="fw-bold text-center" style="color:#000;margin-top:12px;">Reports e Painéis<br> Personalizados</h5>
                        <p class="text-center">Visualize atividades e alterações com painéis e relatórios personalizáveis.</p>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2"></div>

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
                        <img src="<?= base_url(); ?>/public/assets/img/img-aws-3.png" class="d-block w-100 img-fluid" alt="Lupe"/>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#000; padding-top:0px;">+ Cenários que resolvemos</h1>
                        <p>Correlacionamos eventos de segurança da AWS e de outras fontes de dados, monitorando padrões de ameaças internas e cibernéticas. Os principais casos de uso incluem:</p>
                        
                        <ul>
                            <li><strong>Acesso não autorizado</strong>, como um login de um IP raro ou geolocalização, um pico de logins com falha, uma anomalia de velocidade de terra ou um IP malicioso;</li>

                            <li><strong>Anomalias de configuração do Amazon EC2</strong>, como um pico na criação ou exclusão de instâncias, atividades suspeitas de administração ou uma instância rara;</li>

                            <li><strong>Atividades suspeitas do AWS IAM</strong>, como criação suspeita de usuários, alterações de privilégio administrativo, alterações na política de senha ou atividades privilegiadas raras;</li>

                            <li><strong>Tráfego suspeito do VPC da Amazon</strong>, incluindo varreduras de portas ou conexões em portas anômalas;</li>
                           
                        </ul>
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
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#000;padding-top:0px;">Detecção de Ameaças por Alertas</h1>
                        <p>A detecção de ameaças da Lupe Cloud correlaciona indicadores de fontes de dados, a fim de detectar ataques direcionados.</p>
                        <p>Por exemplo, quando se trata de um ataque de cryptojacking, podemos incluir: </p>
                        
                        <ul>
                            <li>Um login suspeito do console, como um login de um local raro ou uma violação nos registros do console AWS;

                            <li>Uma elevação de permissão relacionada encontrada nos registros IAM;</li>

                            <li>Um pico nas instâncias de início em AWS ou raras instâncias de início encontradas nos registros de configuração do Amazon EC2;</li>

                            <li>O registro AWS CloudTrail está sendo desativado de acordo com os registros do AWS IAM;</li> 
                        </ul>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <img src="<?= base_url(); ?>/public/assets/img/img-aws-4.png" class="d-block w-100 img-fluid" alt="Lupe"/>
                    </div>

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                </div>

            </div>
        </div>
    </section>

    <!--section5-->
    <section id="section5">
        <div class="container-fluid" style="background: #fafafa;">
            <div class="container pt-5 pb-5">
                <div class="row">

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <img src="<?= base_url(); ?>/public/assets/img/img-aws-5.png" class="d-block w-100 img-fluid" alt="Lupe"/>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#000;padding-top:90px;">Reports e Painéis Personalizados</h1>
                        <p>O monitoramento de segurança da Lupe Cloud para AWS permite que você gere rapidamente relatórios de qualquer dashboard.</p>
                        
                        <ul>
                            <li>Visualize atividades e alterações em sua infraestrutura AWS;</li>

                            <li>Painéis e relatórios facilmente personalizados;</li>

                            <li>Compartilhe-o com diretores, gerentes e profissionais de conformidade;</li>
                        </ul>
                    </div>

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                </div>

            </div>
        </div>
    </section>
    
    <!--section6-->
    <section id="section6">
        <div class="container-fluid">
            <div class="container pt-5 pb-5">
                <div class="row">

                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <h1 class="fs-3 fw-bold h-mobile" style="color:#000;padding-top:20px;">Benefícios da Integração</h1>
                        <ul>
                            <li>A integração direta de API simplificada permite uma rápida coleta de eventos.</li> 

                            <li>Cobertura completa de log AWS, incluindo amazon virtual private cloud (VPC), Amazon Elastic Compute Cloud (EC2), Elastic Load Balanceing (ELB), login e eventos de API.</li> 

                            <li>Enriquecimento de dados com contexto adicional para modelagem de ameaças.</li> 

                            <li>Integrações bidirecionais fora da caixa para o Amazon Simple Storage Service (S3), Amazon CloudWatch e Amazon GuardDuty.</li>

                            <li>Data Insights: A Lupe Cloud para AWS permite visualizar atividades e alterações em sua infraestrutura AWS com painéis e relatórios fora da caixa que podem ser facilmente personalizados.</li> 
                        </ul>    
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                        <img src="<?= base_url(); ?>/public/assets/img/img-aws-6.png" class="d-block w-100 img-fluid" alt="Lupe"/>
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