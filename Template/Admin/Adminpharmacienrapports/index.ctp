
<?php

$this->Html->css('../plugins/admin/custombox/css/custombox.min', ['block' => true]);
$this->Html->css('../plugins/admin/datatables/dataTables.bootstrap4.min', ['block' => true]);
$this->Html->css('../plugins/admin/datatables/buttons.bootstrap4.min', ['block' => true]);
$this->Html->css('../plugins/admin/datatables/responsive.bootstrap4.min', ['block' => true]);
$this->Html->css('../plugins/admin/datatables/select.bootstrap4.min', ['block' => true]);

$this->Html->script('../plugins/admin/datatables/jquery.dataTables.min', ['block' => true]);
$this->Html->script('../plugins/admin/datatables/dataTables.bootstrap4.min', ['block' => true]);
$this->Html->script('../plugins/admin/datatables/dataTables.buttons.min', ['block' => true]);
$this->Html->script('../plugins/admin/datatables/buttons.bootstrap4.min', ['block' => true]);
$this->Html->script('../plugins/admin/datatables/jszip.min', ['block' => true]);
$this->Html->script('../plugins/admin/datatables/pdfmake.min', ['block' => true]);
$this->Html->script('../plugins/admin/datatables/vfs_fonts', ['block' => true]);
$this->Html->script('../plugins/admin/datatables/buttons.html5.min', ['block' => true]);
$this->Html->script('../plugins/admin/datatables/buttons.print.min', ['block' => true]);
$this->Html->script('../plugins/admin/datatables/dataTables.keyTable.min', ['block' => true]);
$this->Html->script('../plugins/admin/datatables/dataTables.responsive.min', ['block' => true]);
$this->Html->script('../plugins/admin/datatables/responsive.bootstrap4.min', ['block' => true]);
$this->Html->script('../plugins/admin/datatables/dataTables.select.min', ['block' => true]);
$this->Html->script('../plugins/admin/custombox/js/custombox.min', ['block' => true]);
$this->Html->script('../plugins/admin/custombox/js/legacy.min', ['block' => true]);


?>

<ul class="list-inline menu-left mb-0">
    <li class="float-left">
        <button class="button-menu-mobile open-left disable-btn">
            <i class="dripicons-menu"></i>
        </button>
    </li>
    <li>
        <div class="page-title-box">
            <h4 class="page-title">Rapports </h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $this->Html->link("Rapports" , ['controller' => 'Adminpharmacienrapports', 'action' => 'index'])?></li>
                <li class="breadcrumb-item"><?= $this->Html->link("Rapports" , ['controller' => 'Adminpharmacienrapports', 'action' => 'index'])?></li>

            </ol>
        </div>
    </li>

</ul>

</nav>

</div>


<!-- Start Page content -->
<div class="content">
    <div class="container-fluid">



        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Liste des rapports sur les pharmaciens : </h4>
                    <br/>



                    <?= $this->Flash->render()  ?>
                    <br/>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('Nom du pharmacien') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Prénom du pharmacien') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Objet') ?></th>

                            <th scope="col"><?= $this->Paginator->sort('Adresse du pharmacie') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($rapports as $rapport): ?>
                            <tr>
                                <td><?= h($rapport['user']['lastname']) ?></td>
                                <td><?= h($rapport['user']['firstname']) ?></td>
                                <td><?= h($rapport->objet) ?></td>

                                <td><?= h($rapport['profile']['adressepharmacie']) ?></td>

                                <td class="actions">





                                    <?= $this->Html->link(
                                        '<i class="fa fa-star"></i>',
                                        ['action' => 'view', $rapport->id],
                                        array("escape"=>false, "class"=>"btn btn-outline-primary waves-light waves-effect", "data-animation"=>"fall", "data-plugin"=>"custommodal", "data-overlayspeed"=>"100", "data-overlaycolor"=>"#36404a")) ?>

                                    <?= $this->Form->postLink(
                                        '<button type="button" class="btn btn-outline-danger waves-light waves-effect"> <i class="fa fa-remove"></i> </button>',
                                        ['action' => 'delete', $rapport->id],
                                        ["escape"=>false, 'confirm' => __('Are you sure you want to delete {0}?', $rapport->objet)]) ?>


                                </td>

                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end row -->



    </div> <!-- container -->

</div> <!-- content -->

