<?php

?>
<h4 class="custom-modal-title">Modifier l'utilisateur : <?= $user->firstname ?> <?= $user->lastname ?></h4>
<div class="custom-modal-text">
    <?= $this->Form->create($user,array("class"=>"form-horizontal")) ?>
    <div class="form-group m-b-25">
        <div class="col-12">
            <label for="lastname">firstname :</label>
            <?php echo $this->Form->control('firstname',array('label'=>false, "class"=>"form-control required", "placeholder"=>"firstname" ));  ?>
            
        </div><br/>
        <div class="col-12">
            <label for="firstname">lastname :</label>
            <?php echo $this->Form->control('lastname',array('label'=>false, "class"=>"form-control required", "placeholder"=>"lastname" ));  ?>
            
        </div><br/>
        <div class="col-12">
            <label for="phone">email :</label>
            <?php echo $this->Form->control('email',array('label'=>false, "class"=>"form-control required",  "placeholder"=>"email" ));  ?>
            
        </div><br/>
        <div class="col-12">
            <label for="adress">password :</label>
            <?php echo $this->Form->control('password',array('label'=>false, "class"=>"form-control required", "placeholder"=>"password" ));  ?>
            
        </div><br/>
        
        
        <div class="col-12">
            <label for="password">region_id :</label>
            <?php echo $this->Form->control('region_id',array('label'=>false, "class"=>"form-control mt-15",'options' => $regions ));  ?>
            
        </div><br/>
    </div>
    
    <div class="form-group account-btn text-center m-t-10">
        <div class="col-12">
            <?= $this->Form->button(__('Ajouter'),array("class"=>"btn w-lg btn-rounded btn-custom waves-effect waves-light", "type"=>"submit")) ?>
            
        </div>
    </div>
    <?= $this->Form->end() ?>