<?php
    echo $this->extend('admin/templates/layout');
    echo $this->section('content');
?>

<section class="content">

    <div class="row">

        <div class="col-lg-3 col-xs-6">
    
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><strong><?= $countContacts; ?></strong></h3>
                    <p>Lead(s)</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sx-6 col-lg-6 col-sm-6">
            <div class="list-group">
                <h4 class="list-group-item active" aria-current="true">Último(s) Lead(s)</h4>
                <table class="table table-striped" style="width: 100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>Data</th>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>E-mail</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($contacts as $contact){
                            extract($contact);
                        ?>
                        <tr>
                            <td><?= date('d/m/Y', strtotime($created_at)); ?></td>
                            <td><?= $name; ?></td>
                            <td><?= $last_name; ?></td>
                            <td><?= $email; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div> 

    </div>
    
</section>

<?php echo $this->endSection(); ?>

