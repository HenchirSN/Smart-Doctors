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
                                    <h4 class="page-title">Users </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><?= $this->Html->link("Users" , ['controller' => 'Users', 'action' => 'index'])?></li>
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
                                    <h4 class="m-t-0 header-title">All Profiles   : </h4>
                                    
                                    <br/><br/>
                                    <?= $this->Flash->render()  ?>
                                    <br/>
<div class="custom-modal-text">
    <?= $this->Form->create($docprofile,array("class"=>"form-horizontal")) ?>
    <div class="form-group m-b-25">
        
        <div class="col-12">
            <label for="firstname">datenaissance :</label>
            <?php echo $this->Form->control('datenaissance',array('label'=>false, "class"=>"form-control required", "placeholder"=>"datenaissance" ));  ?>
            
        </div><br/>
        <div class="col-12">
            <label for="phone">mobile :</label>
            <?php echo $this->Form->control('mobile',array('label'=>false, "class"=>"form-control required",  "placeholder"=>"mobile" ));  ?>
            
        </div><br/>
        <div class="col-12">
            <label for="adress">specialité :</label>
            <?php echo $this->Form->control('specialité',array('label'=>false, "class"=>"form-control required", "placeholder"=>"specialité" ));  ?>
            
        </div><br/>
         <div class="col-12">
            <label for="adress">adresse :</label>
            <?php echo $this->Form->control('adresse',array('label'=>false, "class"=>"form-control required", "placeholder"=>"adresse" ));  ?>
            
        </div><br/>
         <div class="col-12">
            <label for="adress">codepostal :</label>
            <?php echo $this->Form->control('codepostal',array('label'=>false, "class"=>"form-control required", "placeholder"=>"codepostal" ));  ?>
            
        </div><br/>
        <div class="col-12">
            <label for="adress">situationfamiliale :</label>
            <?php echo $this->Form->control('situationfamiliale',array('label'=>false, "class"=>"form-control required", "placeholder"=>"situationfamiliale" ));  ?>
            
        </div><br/>
        
        
       
    </div>
    
    <div class="form-group account-btn text-center m-t-10">
        <div class="col-12">
            <?= $this->Form->button(__('Ajouter'),array("class"=>"btn w-lg btn-rounded btn-custom waves-effect waves-light", "type"=>"submit")) ?>
            
        </div>
    </div>
    <?= $this->Form->end() ?>