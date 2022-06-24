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
                    <img src="<?= base_url(); ?>/public/assets/img/banner-blog.png" class="d-block img-fluid desktop" alt="Lupe" style="width:100%">
                    <img src="<?= base_url(); ?>/public/assets/img/banner-blog-mobile.png" class="d-block img-fluid mobile" alt="Lupe" style="width:100%;">
                </div> 
            </div>  
        </div>       
    </section> 

    <!--section2-->
    <section id="section2">
        <div class="container-fluid" style="background:#fafafa;">
            <div class="container pt-5 pb-5">
                
                <div class="row">
                    
                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>
                    
                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                        <h1 class="h3">BLOG LUPE CLOUD</h1>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4" align="right" style="padding: 1% 0 2% 0;">
                        <form action="<?php echo base_url();?>/pesquisa-blog" method="post" class="form-inline">

                            <div class="input-group">
                                <input type="search" class="form-control" name="search" required="" placeholder="Faça uma pesquisa...">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>

                            <?= csrf_field();?>
                        </form>
                    </div>

                </div> 
                
                <?php
                    if(count($blogs) == 0){
                        echo '<div class="alert alert-info"><h6 class="text-center"><i class="fa fa-exclamation"></i> Desculpa, nenhuma postagem localizada!</h6></div>';
                    }else{
                        foreach($blogs as $blog){ 
                            extract($blog);
                ?>
                <div class="row mt-4">
                    
                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>
                    
                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 shadow" style="padding: 10px 10px 10px 10px;">
                        <a href="blog/<?= $slug; ?>"><img src="<?= base_url(); ?>/public/img/blog/<?= $photo; ?>" alt="<?= $title; ?>" class="img-responsive img-thumbnail"></a>
                    </div>
                    
                    <div class="divisor"></div>
                    
                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5 pt-5">
                        <h1 class="h3"><strong><?= $title; ?></strong></h1>
                        <p class="small">Por <?= $name; ?> em <?= date('d/m/Y', strtotime($created_at)); ?></p>
                        <?php
                            $call_blog = strip_tags($call_blog);
                        ?>
                        <a href="blog/<?= $slug; ?>"><?= (limitarTexto($call_blog, 150)); ?></a>
                    </div>
                    
                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>
                     
                </div>
                
                <?php }} ?> 
                
                <div class="row mt-5">
                    
                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1"></div>
                    
                    <div class="col-md-10 col-sm-10 col-xs-10 col-lg-10">
                         <?php echo $pager->links();?>
                    </div>
                    
                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4"></div>
                    
                </div>

            </div>
           
           
     
        </div>
    </section>
    
</div>

<?php
echo $this->endSection();
?>