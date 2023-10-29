
<?= $this->Flash->render()  ?>
<?php
        
    

?>

        <?= $this->Form->create() ?>

        

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="pass1">Nouveau mot de passe : </label>
                                        <?= $this->Form->control('pass1',array('label'=>false,'type'=>'password' ,"class"=>"form-control","placeholder"=>"Nouveau mot de passe :")) ?>
                                       
                                    </div>
                                </div>



                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="pass2">Confirmation mot de passe : </label>
                                        <?= $this->Form->control('pass2',array('label'=>false,'type'=>'password' ,"class"=>"form-control","placeholder"=>"Confirmation mot de passe")) ?>
                                       
                                    </div>
                                </div>




                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <?= $this->Form->button('Valider ',array("class"=>"btn btn-block btn-custom waves-effect waves-light")) ?>
                                        
                                    </div>
                                </div>

                                

                                
                                         
                                         
                                           
<?= $this->Form->end() ?> 

                                   
