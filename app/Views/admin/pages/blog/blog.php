<?php
    echo $this->extend('admin/templates/layout');
    echo $this->section('content');
?>
<div class="container-fluid">
    
    <div class="row mt-5">
        
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <div class="alert alert-info text-center"><p><i class="fa fa-check"></i> <strong>CADASTRANDO BLOG</strong></p></div>
        </div>
        
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 mt-3">
            <a href="<?= base_url();?>/admin/inserir-blog" class="btn btn-info" >
                Cadastrar Novo <i class="fa fa-cloud"></i>
            </a>        
        </div>
        
        <!--msg-->
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 mt-3">
            <?= $msg;?>
        </div>
        
        <!--contagem-->
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 mt-3">
            <p>Total encontrado(s): <strong><?= $count;?></strong></p> 
        </div>
        
        <div class="col-md-12 col-lg-12 col-xs-12">
            
            <div class="table-responsive">
                <table class="table table-striped" style="width:100% !important;">

                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center"><i class="fa fa-camera"></i></th>
                            <th><i class="fa fa-comment"></i></th>
                            <th class="text-center"><i class="fa fa-calendar"></i> Publicação</th>
                            <th class="text-center"><i class="fa fa-eyes"></i> Status</th>
                            <th class="text-center"><i class="fa fa-edit"></i></th>
                            <th class="text-center"><i class="fa fa-remove"></i></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            foreach($blogs as $blog){
                                extract($blog);
                        ?>
                        <tr>
                            <!--img-->
                            <?php if($photo){ ?>
                            <td class="text-center"><img src="<?php echo base_url();?>/public/img/blog/<?= $photo;?>" class="img-responsive img-thumbnail" width="150"/></td>
                            <?php }else{?>
                            <td class="text-center"><img src="<?php echo base_url();?>/public/img/sem-imagem.jpg"/></td>
                            <?php }?>

                            <td><?= $title;?></td>
                            <td class="text-center"><?= date('d/m/Y', strtotime($created_at));?></td>

                            <!--status-->
                            <?php if($status == '1'){ ?>
                            <td class="text-center"><span class="btn btn-success btn-circle">Ativo</span></td>
                            <?php }else{?>
                            <td class="text-center"><span class="btn btn-danger btn-circle">Inativo</span></td>
                            <?php }?>
                            
                            <td class="text-center">
                                <?php echo anchor(base_url('admin/editar-blog/'. $id),'Editar', ['class' => 'btn btn-success']);?>
                            </td>
                            <td class="text-center">
                                <?php echo anchor(base_url('admin/blog/delete/'. $id),'Excluir', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Deseja realmente exluir?")']);?>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>

                </table>
            </div>
            <?php echo $pager->links();?>
        </div>
    </div>
    
</div>

<?php echo $this->endSection(); ?>
