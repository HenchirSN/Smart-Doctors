
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
            <h4 class="page-title">Rapports </h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $this->Html->link("Rapports" , ['controller' => 'Docteurrapports', 'action' => 'index'])?></li>
                <li class="breadcrumb-item"><?= $this->Html->link("Liste" , ['controller' => 'Docteurrapports', 'action' => 'index'])?></li>

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

                            <th scope="col"><?= $this->Paginator->sort('Rapport') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Remarques') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Nom du patient') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Prénom du patient') ?></th>

                            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($docteurrapports as $docteurrapport): ?>
                            <tr>

                                <td><?= h($docteurrapport->rapport) ?></td>
                                <td><?= h($docteurrapport->remarques) ?></td>
                                <td><?= h($docteurrapport['user']['lastname']) ?></td>
                                <td><?= h($docteurrapport['user']['firstname']) ?></td>

                                <td><?= h($docteurrapport->created) ?></td>
                                <td><?= h($docteurrapport->modified) ?></td>

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

