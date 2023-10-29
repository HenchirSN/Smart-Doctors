
<?=

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
                <li class="breadcrumb-item"><?= $this->Html->link("Rapports" , ['controller' => 'Adminpharmacienrapports', 'action' => 'add'])?></li>
                <li class="breadcrumb-item"><?= $this->Html->link("Ajout" , ['controller' => 'Adminpharmacienrapports', 'action' => 'add'])?></li>

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








                    </br>
                    <?= $this->Form->create($adminpharmacienrapport,array("class"=>"form-horizontal")) ?>

                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="label">Objet :</label>
                            <?php echo $this->Form->control('objet',array('label'=>false, "class"=>"form-control", "placeholder"=>"votre objet" ,"type"=>"textarea"));  ?>

                        </div>
                    </div>


                    </br>


                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="label">Rapport :</label>
                            <?php echo $this->Form->control('rapport',array('label'=>false, "class"=>"form-control", "placeholder"=>"votre rapport" ,"type"=>"textarea"));  ?>

                        </div>
                    </div>


                    </br>







                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-12">
                            <?= $this->Form->button(__('Ajouter'),array("class"=>"btn w-lg btn-rounded btn-custom waves-effect waves-light", "type"=>"submit")) ?>

                        </div>
                    </div>








                    <?= $this->Form->end() ?>

                </div>
            </div>
        </div>
        <!-- end row -->



    </div> <!-- container -->

</div> <!-- content -->













