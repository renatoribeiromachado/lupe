<?php
    echo $this->extend('admin/templates/layout');
    echo $this->section('content');
?>
<div class="container-fluid">
    <div class="row mt-5">
        
        <div class="col-md-8 col-lg-8 col-xs-8 col-sm-8">
    
            <form action="<?php echo base_url();?>/admin/blog/store" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= isset($blogs['id']) ? $blogs['id'] : '';?>" required="">
                <div class="form-group">
                    <label>Título</label>
                    <input type="text" class="form-control" name="title" value="<?= isset($blogs['title']) ? $blogs['title'] : '';?>" placeholder="Insiro o titulo" required="">
                </div>
                
                <div class="form-group">
                    <label>Data da publicação</label>
                    <input type="date" name="created_at" class="form-control" value="<?= isset($blogs['created_at']) ? date('Y-m-d', strtotime($blogs['created_at'])) : '';?>" required="">
                </div>
                
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="photo" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>Chamada</label>
                    <textarea name="call_blog" class="form-control textarea"><?= isset($blogs['call_blog']) ? $blogs['call_blog'] : '';?></textarea>
                </div>
                
                <div class="form-group">
                    <label>Texto completo</label>
                    <textarea name="text" class="form-control textarea"><?= isset($blogs['text']) ? $blogs['text'] : '';?></textarea>
                </div>
                
                <div class="form-group">
                    <label>Meta Descrição</label>
                    <textarea name="description" class="form-control" required=""><?= isset($blogs['description']) ? $blogs['description'] : '';?></textarea>
                </div>
                
                <div class="form-group">
                    <label>Meta Keyword</label>
                    <input type="text" name="keyword" class="form-control" placeholder="Meta keyword do blog" value="<?= isset($blogs['keyword']) ? $blogs['keyword'] : '';?>" required="">
                </div>
                
                <div class="form-group">
                    <label>Status</label>
                    <?php
                        if(isset($blogs['status'])){
                            if($blogs['status'] == '1' ? $status = 'Ativo' : $status = 'Inativo');
                    ?>
                    <select name="status" class="form-control" required="">
                        <option value="<?= isset($blogs['status']) ? $blogs['status'] : '';?>"><?= $status;?></option>
                        <option value="1">Ativo</option>
                        <option value="0">Inativo</option>
                    </select>
                    <?php }else{?>
                    <select name="status" class="form-control" required="">
                        <option value="1">Ativo</option>
                        <option value="0">Inativo</option>
                    </select>
                    <?php }?>
                </div>             
                
                <div class="mt-2 text-right mb-5">
                    <button type="submit" class="btn btn-primary loading">Salvar Blog</button>
                </div>
                <?= csrf_field();?>
            </form> 
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>