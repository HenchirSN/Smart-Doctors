<?= $this->Flash->render()  ?>
<?php
        
    

?>

        <?= $this->Form->create() ?>

        

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="token">Nous avons bien remarqué que votre compte n'est pas encore activé , veuillez entrez Votre code de vérifiation :</label>
                                        <?= $this->Form->control('token',array('label'=>false,"class"=>"form-control","placeholder"=>"Votre code de vérification")) ?>
                                       
                                    </div>
                                </div>

                                

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <?= $this->Form->button('Activate account',array("class"=>"btn btn-block btn-custom waves-effect waves-light")) ?>
                                        
                                    </div>
                                </div>

                                         
                                         
                                           
        <?= $this->Form->end() ?> 

                                   
