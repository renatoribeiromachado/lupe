<?php
    echo $this->extend('admin/templates/layout');
    echo $this->section('content');
?>
<div class="container-fluid">
    
    <div class="row mt-5">
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <div class="alert alert-info text-center"><p><i class="fa fa-check"></i> <strong>CADASTRANDO USUÁRIO</strong></p></div>
        </div>
        
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 mt-3">
            <a class="btn btn-info"  data-toggle="modal" data-target="#create">
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
                <table class="table table-striped" style="width: 100%">

                    <thead class="thead-dark">
                        <tr>
                            <th><i class="fa fa-camera"></i></th>
                            <th><i class="fa fa-user"></i> Nome</th>
                            <th><i class="fa fa-envelope"></i> E-mail</th>
                            <th class="text-center"><i class="fa fa-remove"></i></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            foreach($users as $user){
                                extract($user);
                        ?>
                        <tr>
                            <?php if($img = "1647450749_a9f0d53be5ad0eace265.png"){?>
                               <td><i class="fa fa-user"></i></td>
                            <?php }else{?>
                               <td><img src="<?php echo base_url(); ?>/public/img/users/<?= $img; ?>"/></td>
                               <?php }?>
                            <td><i class="fa fa-check"></i> <?= $name;?></td>
                            <td><?= $email;?></td>
                            <td class="text-center"><?php echo anchor(base_url('admin/usuarios/delete/'. $id),'Excluir', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Deseja realmente exluir?")']);?></td>
                        </tr>
                        <?php }?>
                    </tbody>

                </table>
            </div>
            <?php echo $pager->links();?>
        </div>
    </div>
    
    <!--Modsal create-->
    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel"><i class="fa fa-check"></i> Novo Cadastro</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <form action="<?php echo base_url();?>/admin/usuarios/store" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Usuário</label>
                            <input type="text" class="form-control" name="name" placeholder="Insira o nome de usuário" value="" required="">
                        </div>

                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="email" class="form-control" name="email" placeholder="Insira o email" value="" required="">
                        </div>
                        
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" class="form-control" name="password" placeholder="Insira uma senha forte" value="" required="">
                        </div>

                        <div class="form-group">
                            <label>Imagem</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="img" id="customFileLang" lang="es">
                                <label class="custom-file-label" for="customFileLang">Selecine o arquivo</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="1">Ativo</option>
                                <option value="2">Inativo</option>   
                            </select>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary loading">Cadastrar</button>
                        </div>
                
                        <?= csrf_field();?>
                      
                    </form> 
                </div>
            </div>
        </div>
    </div>
    
    <!--Modsal update-->
    <div class="modal fade" id="update-user" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title"><i class="fa fa-check"></i></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <form action="<?php echo base_url();?>/admin/usuarios/store" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id" value="">
                   
                        <div class="form-group">
                            <label>Usuário</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Insira o nome de usuário" value="" required="">
                        </div>

                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Insira o email" value="" required="">
                        </div>
                       
                        <div class="form-group">
                            <label>Imagem</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="img" id="customFileLang" lang="es">
                                <label class="custom-file-label" for="customFileLang">Selecine o arquivo</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control" id="status">
                                <option value="1">Ativo</option>
                                <option value="2">Inativo</option>   
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-success loading">Atualizar</button>
                        </div>
                
                        <?= csrf_field();?>
                      
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>
