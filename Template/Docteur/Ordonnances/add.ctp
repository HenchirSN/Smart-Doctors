


<ul class="list-inline menu-left mb-0">
    <li class="float-left">
        <button class="button-menu-mobile open-left disable-btn">
            <i class="dripicons-menu"></i>
        </button>
    </li>
    <li>
        <div class="page-title-box">
            <h4 class="page-title">Ordonnances </h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?= $this->Html->link("Ordonnances" , ['controller' => 'Ordonnances', 'action' => 'add'])?></li>
                <li class="breadcrumb-item"><?= $this->Html->link("Ajout" , ['controller' => 'Ordonnances', 'action' => 'add'])?></li>

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
                    <?= $this->Form->create($ordonnance,array("class"=>"form-horizontal")) ?>


                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="label">Remarque :</label>
                            <?php echo $this->Form->control('label',array('label'=>false, "class"=>"form-control", "placeholder"=>"donner remarque" ,"type"=>"textarea"));  ?>

                        </div>
                    </div>




                    </br>


                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="label">Médicaments :</label>
                            <?php echo $this->Form->control('medicament_id',array('label'=>false, "class"=>"select2 form-control select2-multiple", "multiple"=>"multiple", "multiple data-placeholder"=>"Choose ..",'options' => $medicaments ));  ?>

                        </div>
                    </div>




                    </br>



                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label class="control-label " for="user">Patient<span class="text-danger">*</span> :</label>
                            <?php echo $this->Form->control('user_id',array('label'=>false, "class"=>"form-control select2 select2-hidden-accessible", "tabindex"=>"-1", "aria-hidden"=>"true", 'options' => $users ));  ?>

                        </div>
                    </div>



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
