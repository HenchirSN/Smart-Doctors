


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
                <li class="breadcrumb-item"><?= $this->Html->link("Rendez-vous" , ['controller' => 'Rendezvous', 'action' => 'add'])?></li>
                <li class="breadcrumb-item"><?= $this->Html->link("Modifier" , ['controller' => 'Rendezvous', 'action' => 'add'])?></li>

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
                    <?= $this->Form->create($rendezvous,array("class"=>"form-horizontal")) ?>

                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="label">Date :</label>
                            <div class="input-group">

                                <?php echo $this->Form->control('date',array("label"=>false, "class"=>"form-control","type"=>"text", "placeholder"=>"yyyy/mm/dd","id"=>"                                   datepicker-autoclose"));  ?>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>





                    </br>


                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="label">Début :</label>
                            <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                                <?php echo $this->Form->control('datedebut',array("label"=>false,  "class"=>"form-control","type"=>"text"));  ?>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>




                    </br>


                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="label">Fin :</label>
                            <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                                <?php echo $this->Form->control('datefin',array("label"=>false,  "class"=>"form-control","type"=>"text"));  ?>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                </div>
                            </div>
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
                            <?= $this->Form->button(__('Modifier'),array("class"=>"btn w-lg btn-rounded btn-custom waves-effect waves-light", "type"=>"submit")) ?>

                        </div>
                    </div>








                    <?= $this->Form->end() ?>

                </div>
            </div>
        </div>
        <!-- end row -->



    </div> <!-- container -->

</div> <!-- content -->
















