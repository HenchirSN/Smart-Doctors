
<?=
$this->element('view/indexelement');
$this->element('view/temp');


?>

<ul class="list-inline menu-left mb-0">
    <li class="float-left">
        <button class="button-menu-mobile open-left disable-btn">
            <i class="dripicons-menu"></i>
        </button>
    </li>
    <li>
        <div class="page-title-box">
            <h4 class="page-title">Rendez-vous </h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $this->Html->link("Rendez-vous " , ['controller' => 'Rendezvous ', 'action' => 'index'])?></li>
                <li class="breadcrumb-item"><?= $this->Html->link("Liste" , ['controller' => 'Rendezvous', 'action' => 'index'])?></li>

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
                    <br/>






                    <?= $this->Html->link("<b>Ajouter</b>",['action' => 'add'],
                        array("escape"=>false, "class"=>"btn btn-success btn-rounded waves-light waves-effect" , "data-overlayspeed"=>"100", "data-overlaycolor"=>"#36404a")) ?>

                    <br/><br/><br/>

                    </br>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>

                            <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('datedebut') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('datefin') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Nom du patient') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Prénom du patient') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($rendezvous as $rendezvou): ?>
                            <tr>

                                <td><?= h($rendezvou->date) ?></td>
                                <td><?= h($rendezvou->datedebut) ?></td>
                                <td><?= h($rendezvou->datefin) ?></td>
                                <td><?= h($rendezvou['user']['lastname']) ?></td>
                                <td><?= h($rendezvou['user']['firstname']) ?></td>
                                <td><?= h($rendezvou->created) ?></td>
                                <td><?= h($rendezvou->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(
                                        '<i class="fa fa-wrench"></i>',
                                        ['action' => 'edit', $rendezvou->id],
                                        array("escape"=>false, "class"=>"btn btn-primary ")) ?>

                                    <?= $this->Form->postLink(
                                        '<button type="button" class="btn btn-outline-danger waves-light waves-effect"> <i class="fa fa-remove"></i> </button>',
                                        ['action' => 'delete', $rendezvou->id],
                                        ["escape"=>false, 'confirm' => __('Are you sure you want to delete {0}?', $rendezvou->label)]) ?>




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

