<?php
    echo $this->extend('admin/templates/layout');
    echo $this->section('content');
?>

<div class="container-fluid">

    <div class="row mt-5">
        
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <div class="alert alert-info text-center"><p><i class="fa fa-check"></i> <strong>VISUALIZANDO LEAD(S)</strong></p></div>
        </div>
        
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 mt-3">

            <div class="table-responsive">
                <table class="table table-striped shadow" style="width:100% !important;"> 

                    <thead class="thead-dark">
                        <tr>
                            <td>Total <span class="badge"><?= $count;?></span></td>
                            <td colspan="7"></td>
                            <td class="text-right" title="Exportar tabela para CSV Excel"><a href="<?php echo base_url(); ?>/admin/exportar-contatos" class="btn btn-success"><i class="fa fa-table"></i> Exportar Excel</a></td>
                        </tr>
                        <tr>
                            <th class="text-center">Nome</th>
                            <th class="text-center">E-mail</th>
                            <th class="text-center">Empresa</th>
                            <th class="text-center">Telefone</th>                          
                            <th class="text-center">Mensagem</th>
                            <th class="text-center">Endereço</th>
                            <th class="text-center">Url</th>
                            <th class="text-center">Data</th>
                            <th class="text-center"><i class="fa fa-remove"></i></th>
                        </tr>
                    </thead>

                    <tbody>
                         <tr>
                            <?php 
                            if(!$contacts){
                                echo "<td colspan='4'>";
                                echo "<td class='text-danger text-center'><strong> <i class='fa fa-exclamation'></i> Nenhum item cadastrado...</strong></td>";
                                echo "<td colspan='4'>";
                            }else{
                                foreach ($contacts as $contact){
                                    extract($contact);
                            ?>
                            <td><?= $name; ?></td>
                            <td><?= $email; ?></td>
                            <td><?= $company; ?></td>
                            <td><?= $telephone; ?></td>
                            <td><?= $message; ?></td>
                            <td><?= $adress; ?></td>
                            <td><?= $url; ?></td>
                            <td class="text-center"><?= date('d/m/Y', strtotime($created_at)); ?></td>
                            <td class="text-center"><?php echo anchor(base_url('admin/contato/delete/' . $id), 'Excluir', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Deseja realmente exluir?")']); ?></td>
                        </tr>
                        <?php }}?>
                    </tbody>

                </table>
            </div>
            <?php echo $pager->links(); ?>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>