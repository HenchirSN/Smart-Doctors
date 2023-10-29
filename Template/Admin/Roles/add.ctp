<?php
       
?>
        <h4 class="custom-modal-title">Ajouter un role</h4>
          <div class="custom-modal-text">
          <?= $this->Form->create($role,array("class"=>"form-horizontal")) ?>

                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="label">Role :</label>
                            <?php echo $this->Form->control('label',array('label'=>false, "class"=>"form-control", "placeholder"=>"Nom du role" ));  ?>
                           
                        </div>
                    </div>
                  
                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-12">
                            <?= $this->Form->button(__('Ajouter'),array("class"=>"btn w-lg btn-rounded btn-custom waves-effect waves-light", "type"=>"submit")) ?>
                           
                        </div>
                    </div>

        <?= $this->Form->end() ?>
