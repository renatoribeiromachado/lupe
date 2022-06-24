<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/Website"> 
    <head>
        <title><?= $title;?></title> 
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="<?= $description;?>"/>
        <meta name="robots" content="index, follow"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="icon" href="//img1.wsimg.com/isteam/ip/2a7f2aeb-1d58-4f1d-8d16-e0071d3e9885/favicon/3784321a-e070-4b8f-97cd-e7ea37276bc0.png/:/rs=w:32,h:32,m" sizes="32x32"/>
    </head>
    <style>
        .main{
            margin-top:110px !important;
        }
       .navbar {
                background: #fff !important;
        }
        .navbar a{
            color: #000 !important;
            font-weight: 600 !important;
        }
        .navbar a:hover{
            color: red !important;
        }
        .navbar-single {
            background: #f1f1f1 !important;
        }
        .navbar-single a{
            color: red !important;
            font-weight:600 !important;
        }
        .navbar-single a:hover{
            color: #000 !important;
        }
        .margin-nav{
            margin-left:380px;
        }
        .bg-cinza{
            background: #f0f0f0 !important; 
        } 
        .footer{
            background: #000 !important; 
        }
        .parallax1{background: url(<?= base_url(); ?>/public/assets/img/bg-footer-1.png);background-size:cover;background-position: center;}
        
        .mobile{
            display:none !important;
        }

        .divisor{
            flex:0 0 auto;width:2.33333333%;
        }
        a{
            text-decoration: none !important;
            color:black !important;
        }

        
       /*responsivo*/
       @media (max-width: 576px) {
           .main{
               margin-top:30px !important;
           }
           p{
               text-align: justify !important;
           }

           /*Contaienr do menu*/
           .navbar {
               background: #fff !important;
               height: 80px;
               position: relative;
           }
           .navbar a{
               color: #fff !important;
           }
             .navbar a:hover{
               color: #fff !important;
           }
           /*Links*/
           .navbar li{
               padding-left: 10px !important;
           }

           /*Hamburger*/
           .navbar-toggler{
               background: green;
               margin-right:20px;
           }

           /*mostra os menus*/
           .navbar-nav{
               background: #000 !important;
               max-width: 200px;
           } 

           .margin-nav{
               margin-left:5px;
           }
           .dropdown-menu a{
               color: #000 !important;
           }

           /*Imagem carrousel*/
            

           /*classes bootstrap 5*/
           .pt-5{
               padding-top:10px !important;
           }
           .logo{
               display:none !important;
           }
           .info{
               display:none !important;
           }
           .desktop{
               display:none !important;
           }
           .mobile{
               display:block !important;
           }
           .h-mobile{
               padding-top:10px !important;
           }
           .pb-5{
               padding-bottom:10px !important;
           }
       }

    </style>
     
    <body>

        <header>
        
            <nav class="container-fluid navbar navbar-expand-sm navbar-dark fixed-top" id="navbar">
               <div class="container">
                   
                   <div class="col-md-1 col-xl-1 col-sm-1 col-lg-1"></div>
                   
                   <a href=""><img src="<?= base_url(); ?>/public/assets/img/logo-lupecloud.png" class="img-fluid" width="" alt=""/></a>
                   <button class="navbar-toggler mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                       <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse margin-nav mt-3" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active text-dark" aria-current="page" href="<?= base_url(); ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?= base_url(); ?>/#solucao">Nossa Solução</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Funcionalidades
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/office-365">Office 365</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/azure">Azure</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/nuvem-aws">Nuvem AWS</a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?= base_url(); ?>/blog-lupe-cloud">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?= base_url(); ?>/#lead">Contato</a>
                            </li>
                        </ul>
                   </div>
               </div>
           </nav>
        </header> 

        <!--CONTENT-->
        <?php echo $this->renderSection('content');?>
        
        <!--form-->
        <section>
            <div class="container-fluid parallax1">
                <div class="container mt-5 pb-5">
                    <div class="row">

                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>

                        <!--validation model-->
                        <div class="col-md-10 col-sm-10 col-xs-10 col-lg-10" id="lead">
                            <?php

                            $msg;

                            if (session()->has('errors_validation_model'))
                            {

                                echo "<ul>";
                                foreach (session('errors_validation_model') as $error)
                                {
                                    echo "<li class='text-danger'>$error</li>";
                                }
                                echo "</ul>";
                            }
                            ?>
                        </div>

                    </div>

                    <div class="row mt-2">

                        <div class="col-md-1 col-sm-21 col-xs-1 col-lg-1"></div>

                        <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                            <h3 class="fw-bold" style="color:#000;">Entre em contato conosco!</h3>
                            <p class="">Nos contacte para esclarecer suas dúvidas, solicitar suporte ou enviar sugestões para que possamos oferecer o serviço necessário.</p>

                            <form action="<?php echo base_url(); ?>/home/store" method="post">
                                <input type="hidden" value="Lupe" name="url">



                                <div class="row mb-3">
                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                        <input type="text" id="disabledTextInput" class="form-control" name="name" value="<?= old('name'); ?>" placeholder="Nome">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                        <input type="email" id="disabledTextInput" class="form-control" name="email" value="<?= old('email'); ?>" placeholder="E-mail">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                        <input type="text" id="disabledTextInput" class="form-control" name="company" value="<?= old('company'); ?>" placeholder="Empresa">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                        <input type="text" id="disabledTextInput" class="form-control" name="telephone" value="<?= old('telephone'); ?>" placeholder="Telefone">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                        <textarea class="form-control" rows="5" name="message" placeholder="Mensagem"><?= old('message'); ?></textarea>
                                    </div>

                                </div>
                        </div>

                        <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">

                            <div class="row logo">   
                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                    <img src="<?= base_url(); ?>/public/assets/img/logo-lupecloud.png" class="float-end img-fluid" alt="Lupe"/>
                                </div>
                            </div>

                            <div class="row mb-3" style="margin-top:20px;">   
                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                    <input type="text" id="disabledTextInput" class="form-control" name="adress" value="<?= old('adress'); ?>" placeholder="Endereço">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                    <input type="text" id="disabledTextInput" class="form-control" name="telephone2" value="<?= old('telephone2'); ?>" placeholder="Telefone">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary"> Enviar Mensagem</button>
                            <?= csrf_field(); ?>


                            <div class="row mt-3 mb-3">
                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                    <p><a href="https://wa.me/55 ----- ?text=Oi, gostaria de mais informa%C3%A7%C3%B5es." target="_blank"><img src="<?= base_url(); ?>/public/assets/img/whatsapp.png" class="img-fluid" alt="Lupe"/></a> <span class="info">e entre em contato via WhatsApp</span></p>
                                </div>
                            </div>


                            </form> 

                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Footer copyright -->
        <footer class="footer mt-5">
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12"  style="padding: 20px 0 20px 0;">
                            <a href="https://markp.com.br/" target="_blank"><img src="<?= base_url();?>/public/assets/img/logoMarkp.png" alt="Crono Tecnologia" class="img-responsive center-block"></a>
                        </div> 
                    </div>
                </div>    
            </div>
        </footer>

        <!-- scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script id="cookieinfo" src="<?= base_url(); ?>/public/assets/js/cookieinfo.min.js" data-bg="#2c91d8" data-fg="#fff" data-link="#f1d600" data-moreinfo="" data-message="Utilizamos cookies para melhorar a sua experiência. Ao continuar a visitar este site, você concorda com o uso de cookies." data-linkmsg="Mais informações" data-close-text="Permitir Cookies!"></script>

        <script>
            /*Altera cor de fundo do menu ao rolar a pagina*/
            let nav = document.querySelector('#navbar');

            window.addEventListener("scroll", function(e) {
                if(window.pageYOffset > 100){
                    nav.classList.add("navbar-single");
                }
                else{
                    nav.classList.remove("navbar-single");
                    nav.classList.add("navbar");
                }
            });
            
            /*Navegação single page*/
            const links = document.querySelectorAll('#navbar a[href^="#"]');
                
            links.forEach(item =>{
                item.addEventListener('click',scrollTo)
            })

            function scrollTo(event){
                event.preventDefault()
                const element = event.target
                const id = element.getAttribute('href')
                const to = document.querySelector(id).offsetTop

               window.scroll({
                   top: to -150,
                   behavior: "smooth",
               })
            }
        </script>

    </body>
</html>