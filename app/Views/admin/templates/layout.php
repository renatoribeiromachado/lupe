<!DOCTYPE html>
<html>
    <head> 
        <meta charset="UTF-8">
        <title><?= $title; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- favicon -->
        <link rel="shortcut icon" href="<?= base_url(); ?>/public/assets/admin/favicon/favicon.ico">
        <!-- Bootstrap 3.0 com classses do 4 -->
        <link href="<?= base_url(); ?>/public/assets/admin/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />   

        <!-- FontAwesome 4.3.0 -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons 2.0.0 -->
        <link href="https://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
        <!-- Theme style -->
        <link href="<?= base_url(); ?>/public/assets/admin/dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?= base_url(); ?>/public/assets/admin/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" /> 
        <!-- iCheck -->
        <link href="<?= base_url(); ?>/public/assets/admin/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?= base_url(); ?>/public/assets/admin/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?= base_url(); ?>/public/assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?= base_url(); ?>/public/assets/admin/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?= base_url(); ?>/public/assets/admin/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?= base_url(); ?>/public/assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>
    
    <body class="skin-blue">
        <div class="wrapper"> 

            <header class="main-header">

                <a href="<?= base_url(); ?>/admin" class="logo"><i class="fa fa-dashboard"></i> <b>Painel</b></a>

                <nav class="navbar navbar-static-top" role="navigation">
   
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-user"></i> <span class="hidden-xs"><?= session()->get('name'); ?></span>
                                </a>
                                <ul class="dropdown-menu">
                           
                                    <li class="user-header">
                                        <i class="fa fa-user"></i>
                                        <p>
                                            <?= session()->get('name'); ?>
                                            <small>Cadastrado desde <?= session()->get('created_at'); ?></small>
                                        </p>
                                    </li>

                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?= base_url(); ?>/login/logout" class="btn btn-default btn-flat">Logout</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <aside class="main-sidebar">

                <section class="sidebar">
    
                    <div class="user-panel">
                        <div class="pull-left image">
                            <i class="fa fa-user" style="background: #fff;"></i>
                        </div>
                        <div class="pull-left info">
                            <p><?= session()->get('name'); ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>

                    <ul class="sidebar-menu">
                        <li class="header">Menu de navegação</li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-camera"></i> <span>Blog</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?= base_url(); ?>/admin/listar-blog"><i class="fa fa-circle-o"></i> listar blog(s)</a></li>
                            </ul>
                        </li>
          
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-envelope"></i> <span>Contato(s)</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?= base_url(); ?>/admin/listar-contatos"><i class="fa fa-circle-o"></i> listar contato(s)</a></li>
                            </ul>
                        </li>

                    </ul>
                </section>
            </aside>

            <div class="content-wrapper">    
  
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Painel de Controle</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?= base_url(); ?>/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <?php echo $this->renderSection('content'); ?>

            </div>  

            <footer class=" main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; 2022 <a href="www.markp.com.br">MarkP</a>.</strong> todos os direitos reservados
            </footer>

            <!-- jQuery 2.1.3 -->
            <script src="<?= base_url(); ?>/public/assets/admin/plugins/jQuery/jQuery-2.1.3.min.js"></script>

            <!-- seet alert -->
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <!-- jQuery UI 1.11.2 -->
            <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button);
            </script>

            <link href="<?= base_url(); ?>/public/assets/admin/dist/js/jquery.js" rel="stylesheet" type="text/css" /> 
            <!-- Bootstrap 3.3.2 JS -->
            <script src="<?= base_url(); ?>/public/assets/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
            <!-- Morris.js charts -->
            <!--<script src="<?= base_url(); ?>/public/assets/admin/plugins/morris/morris.min.js" type="text/javascript"></script>-->
            <!-- Sparkline -->
            <script src="<?= base_url(); ?>/public/assets/admin/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
            <!-- jvectormap -->
            <script src="<?= base_url(); ?>/public/assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
            <script src="<?= base_url(); ?>/public/assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
            <!-- jQuery Knob Chart -->
            <script src="<?= base_url(); ?>/public/assets/admin/plugins/knob/jquery.knob.js" type="text/javascript"></script>
            <!-- daterangepicker -->
            <script src="<?= base_url(); ?>/public/assets/admin/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
            <!-- datepicker -->
            <script src="<?= base_url(); ?>/public/assets/admin/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
            <!-- Bootstrap WYSIHTML5 -->
            <script src="<?= base_url(); ?>/public/assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
            <!-- iCheck -->
            <script src="<?= base_url(); ?>/public/assets/admin/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
            <!-- Slimscroll -->
            <script src="<?= base_url(); ?>/public/assets/admin/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
            <!-- FastClick -->
            <script src='<?= base_url(); ?>/public/assets/admin/plugins/fastclick/fastclick.min.js'></script>
            <!-- AdminLTE App -->
            <script src="<?= base_url(); ?>/public/assets/admin/dist/js/app.min.js" type="text/javascript"></script>

            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <!--<script src="<?= base_url(); ?>/public/assets/admin/dist/js/pages/dashboard.js" type="text/javascript"></script>-->

            <!-- AdminLTE for demo purposes -->
            <script src="<?= base_url(); ?>/public/assets/admin/dist/js/demo.js" type="text/javascript"></script>

            <!-- Sweet alert-->
            <script src="<?= base_url(); ?>/public/assets/admin/assets/sweetalert/sweetalert.min.js"></script>

            <!-- Tinymce -->
            <script src="https://cdn.tiny.cloud/1/42ua8shmdv5momjpgaboqve0gfn4tgdskbacrwlreq27jnwt/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    </body>
</html>