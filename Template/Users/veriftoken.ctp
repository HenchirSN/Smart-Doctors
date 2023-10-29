<?= $this->Flash->render()  ?>
<?php
        
    

?>

        <?= $this->Form->create() ?>

        

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="tokenpass">Un code de vérification vous a été envoyé dans votre E-mail </label>
                                        <?= $this->Form->control('tokenpass',array('label'=>false,"class"=>"form-control","placeholder"=>"Code de vérification")) ?>
                                       
                                    </div>
                                </div>



                              



                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <?= $this->Form->button('valider',array("class"=>"btn btn-block btn-custom waves-effect waves-light")) ?>
                                        
                                    </div>
                                </div>

                                

                                
                                         
                                         
                                           
<?= $this->Form->end() ?> 

                                   
