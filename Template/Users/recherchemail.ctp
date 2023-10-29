<?= $this->Flash->render()  ?>
<?php
        
    

?>

        <?= $this->Form->create() ?>

        

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="mail">Veuillez saisir votre adresse e-mail pour rechercher votre compte. </label>
                                        <?= $this->Form->control('mail',array('label'=>false,"class"=>"form-control","placeholder"=>"Adresse e-mail")) ?>
                                       
                                    </div>
                                </div>



                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <?= $this->Form->button('Rechercher ',array("class"=>"btn btn-block btn-custom waves-effect waves-light")) ?>
                                        
                                    </div>
                                </div>

                                

                                
                                         
                                         
                                           
        <?= $this->Form->end() ?> 

                                   
