<?php
        
    

?>
    <?= $this->Flash->render()  ?>

        <?= $this->Form->create() ?>

        

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">E-mail :</label>
                                        <?= $this->Form->control('email',array('label'=>false,"class"=>"form-control","placeholder"=>"E-mail")) ?>
                                       
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <?= $this->Html->link("<small>Mot de passe oublié ?</small>",array('controller'=>'Users', 'action'=>'recherchemail', 'prefix'=>false),array('escape'=>false, "class"=>"text-muted float-right")) ?>
                                        
                                        <label for="password">Mot de passe :</label>
                                        <?= $this->Form->control('password',array('label'=>false,"class"=>"form-control","placeholder"=>"Mot de passe")) ?>
                                        
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <?= $this->Form->button('Se connecter',array("class"=>"btn btn-block btn-custom waves-effect waves-light")) ?>
                                        
                                    </div>
                                </div>

                                         
                                         
                                           
        <?= $this->Form->end() ?> 

                                   

                            