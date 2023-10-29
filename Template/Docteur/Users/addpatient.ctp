<?php

?>
<h4 class="custom-modal-title">Ajouter un Patient</h4>
<div class="custom-modal-text">
    <?= $this->Form->create($user,array("class"=>"form-horizontal")) ?>
    <div class="form-group m-b-25">
        <div class="col-12">
            <label for="lastname">Nom :</label>
            <?php echo $this->Form->control('lastname',array('label'=>false, "class"=>"form-control required", "placeholder"=>"Nom" ));  ?>
            
        </div><br/>
        <div class="col-12">
            <label for="firstname">Prénom :</label>
            <?php echo $this->Form->control('firstname',array('label'=>false, "class"=>"form-control required", "placeholder"=>"Prénom" ));  ?>
            
          
        
            
        </div><br/>
        <div class="col-12">
            <label for="email">E-mail :</label>
            <?php echo $this->Form->control('email',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"E-mail" ));  ?>
            
        </div><br/>
        <div class="col-12">
            <label for="password">Mot de passe :</label>
            <?php echo $this->Form->control('password',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Mot de passe" ));  ?>
            
        </div><br/>
        
         <div class="col-12">
            <label for="password">Region :</label>
            <?php echo $this->Form->control('region_id',array('label'=>false, "class"=>"form-control mt-15",'options' => $regions ));  ?>
            
        </div><br/>
    </div>
    
    <div class="form-group account-btn text-center m-t-10">
        <div class="col-12">
            <?= $this->Form->button(__('Ajouter'),array("class"=>"btn w-lg btn-rounded btn-custom waves-effect waves-light", "type"=>"submit")) ?>
            
        </div>
    </div>
    <?= $this->Form->end() ?>