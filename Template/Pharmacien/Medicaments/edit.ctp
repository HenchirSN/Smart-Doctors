
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
            <h4 class="page-title">Modifier  </h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $this->Html->link("Médicaments" , ['controller' => 'Medicaments', 'action' => 'index'])?></li>
                <li class="breadcrumb-item"><?= $this->Html->link("Modifier" , ['controller' => 'Medicaments', 'action' => 'edit'])?></li>

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
                    <?= $this->Form->create($medicament,array("class"=>"form-horizontal")) ?>

                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="label">Nom du médicament :</label>
                            <?php echo $this->Form->control('label',array('label'=>false, "class"=>"form-control", "placeholder"=>"votre objet" ,"type"=>"textarea"));  ?>

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













