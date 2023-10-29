<?= $this->element('view/indexelement');


?>

<ul class="list-inline menu-left mb-0">
    <li class="float-left">
        <button class="button-menu-mobile open-left disable-btn">
            <i class="dripicons-menu"></i>
        </button>
    </li>
    <li>
        <div class="page-title-box">
            <h4 class="page-title">Patients </h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $this->Html->link("Patients" , ['controller' => 'Users', 'action' => 'index'])?></li>
                <li class="breadcrumb-item"><?= $this->Html->link("Liste" , ['controller' => 'Users', 'action' => 'index'])?></li>

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
                    <h4 class="m-t-0 header-title"><?= $msg ?> </h4>
                    <br/>

                    <?= $this->Html->link("<b>Ajouter</b>",['controller'=>'Users', 'action'=>'addpa']
                        ,array('escape'=>false, "class"=>"btn btn-outline-success waves-light waves-effect")) ?>

                    <br/><br/><br/>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('Qrcode') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Prénom') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Nom') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Email') ?></th>

                            <th scope="col"><?= $this->Paginator->sort('Cin') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Mobile') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Adresse') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Date de naissance') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Situation F') ?></th>

                            <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= h($user['qrcode']['code']) ?></td>
                                <td><?= h($user->firstname) ?></td>
                                <td><?= h($user->lastname) ?></td>
                                <td><?= h($user->email) ?></td>

                                <td><?= h($user['patient']['cin']) ?></td>
                                <td><?= h($user['patient']['mobile']) ?></td>
                                <td><?= h($user['patient']['adresse']) ?></td>
                                <td><?= h($user['patient']['datenaissance']) ?></td>
                                <td><?= h($user['patient']['situationfamiliale']) ?></td>
                                <td><?= h($user['region']['label']) ?></td>


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

