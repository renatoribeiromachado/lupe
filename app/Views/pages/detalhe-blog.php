<?php
    echo $this->extend('templates/layout');
    echo $this->section('content');
?>
<div class="main">
    <section id="blog">
        <div class="container-fluid" style="background: #fafafa;">
            <div class="container pt-5 pb-5">
                <?php
                    foreach($blogs as $blog){ 
                        extract($blog);
                ?>
                <div class="row">

                    <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3"></div>

                    <div class="col-md-6 col-sm-6 col-xl-6 col-lg-6">
                        <h1 class="h3 text-center"><?= $title; ?></h1>
                        <p class="small text-center">Por <?= $name; ?> em <?= date("d/m/Y", strtotime($created_at)); ?></p>
                        <img src="<?= base_url(); ?>/public/img/blog/<?= $photo; ?>" class="img-fluid shadow" alt="">
                    </div>
                    
                    <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3"></div>
                     
                </div>
                
                <div class="row mt-3">
                    
                    <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2"></div>
                    
                    <div class="col-md-8 col-sm-8 col-xl-8 col-lg-8">
                        <span style="margin-top: 30px important;"><?= $text; ?></span>
                    </div>
                    
                    <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2"></div>
                     
                </div>
                
                 <?php }?>
            </div>
        </div>
    </section>
</div>
<?php
    echo $this->endSection();
?>