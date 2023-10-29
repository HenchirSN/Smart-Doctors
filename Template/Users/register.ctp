<?= $this->Flash->render()  ?>
<?php
        
        $this->Html->css('../plugins/admin/custombox/css/custombox.min', ['block' => true]);
        $this->Html->css('../plugins/admin/bootstrap-tagsinput/css/bootstrap-tagsinput', ['block' => true]);
        $this->Html->css('../plugins/admin/bootstrap-select/css/bootstrap-select.min', ['block' => true]);
        $this->Html->css('../plugins/admin/select2/css/select2.min', ['block' => true]);
        $this->Html->css('../plugins/admin/switchery/switchery.min', ['block' => true]);
        $this->Html->css('../plugins/admin/jquery.steps/css/jquery.steps', ['block' => true]);
        $this->Html->css('admin/amine/selectize.default', ['block' => true]);

        $this->Html->script('../plugins/admin/switchery/switchery.min', ['block' => true]);
        $this->Html->script('../plugins/admin/bootstrap-tagsinput/js/bootstrap-tagsinput.min', ['block' => true]);
        $this->Html->script('../plugins/admin/bootstrap-select/js/bootstrap-select', ['block' => true]);
        $this->Html->script('../plugins/admin/bootstrap-filestyle/js/bootstrap-filestyle.min', ['block' => true]);
        $this->Html->script('../plugins/admin/bootstrap-maxlength/bootstrap-maxlength', ['block' => true]);
        $this->Html->script('../plugins/admin/autocomplete/jquery.mockjax', ['block' => true]);
        $this->Html->script('../plugins/admin/autocomplete/jquery.autocomplete.min', ['block' => true]);
        $this->Html->script('../plugins/admin/autocomplete/countries', ['block' => true]);
        $this->Html->script('admin/pages/jquery.autocomplete.init', ['block' => true]);
        $this->Html->script('admin/pages/jquery.form-advanced.init', ['block' => true]);
        $this->Html->script('../plugins/admin/custombox/js/custombox.min', ['block' => true]);
        $this->Html->script('../plugins/admin/custombox/js/legacy.min', ['block' => true]);
        $this->Html->script('../plugins/admin/jquery.steps/js/jquery.steps.min', ['block' => true]);
        $this->Html->script('admin/pages/jquery.wizard-init', ['block' => true]);
        $this->Html->script('../plugins/admin/parsleyjs/parsley.min', ['block' => true]);
        $this->Html->scriptBlock("
        $(document).ready(function() {
                $('form').parsley();
            });
        ", ['block' => true]);

?>



                                           <?= $this->Form->create($user,array("id"=>"basic-form")) ?>
                                         
                                            <div>
                                                
                                                <h3>Personnelle</h3>
                                                <section>
                                                   
                                                                                                       
                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="lastname">Nom<span class="text-danger">*</span> :</label>
                                                        <div class="">
                                                            <?php echo $this->Form->control('lastname',array('label'=>false, "class"=>"form-control required", "placeholder"=>"Nom" ));  ?>
                                                        </div>
                                                    </div>
                                                  
                                                   <div class="form-group clearfix">
                                                        <label class="control-label " for="firstname">Prénom<span class="text-danger">*</span> :</label>
                                                        <div class="">
                                                           <?php echo $this->Form->control('firstname',array('label'=>false, "class"=>"form-control required", "placeholder"=>"Prénom" ));  ?>
                                                        </div>
                                                    </div>

                                                   <div class="form-group clearfix">
                                                        <label class="control-label " for="phone">Téléphone<span class="text-danger">*</span> :</label>
                                                        <div class="">
                                                       
                                                           <?php echo $this->Form->control('phone',array('label'=>false, "class"=>"form-control required",  "placeholder"=>"Numéro de contact" ));  ?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="adress">Adresse<span class="text-danger">*</span> :</label>
                                                        <div class="">
                                                           <?php echo $this->Form->control('adress',array('label'=>false, "class"=>"form-control required", "placeholder"=>"Adresse" ));  ?>
                                                        </div>
                                                    </div>
                                                  
                                                </section>                                              
                                                
                                                <h3>Account</h3>
                                                <section>
                                                     
                                                    <div class="form-group">
                                                        <label for="email">E-mail<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('email',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"E-mail" ));  ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password">Mot de passe<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('password',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Mot de passe" ));  ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password">Confirmer votre mot de passe<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('password1',array('label'=>false,"require"=>true,"type"=>"password", "data-parsley-equalto"=>"#password", "class"=>"form-control mt-15", "placeholder"=>"Confirmer votre mot de passe" ));  ?>
                                                    </div>

                                                </section>
                                                
                                              
                                               
                                            </div>
                                           
                                        <?= $this->Form->end() ?> 

                                   

       <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Déjà membre ? <?= $this->Html->link('<b>Se Connecter</b>',array('controller'=>'Users', 'action'=>'login', 'prefix'=>false),array('escape'=>false, "class"=>"text-dark m-l-5")) ?>
                                    </p>
                                </div>
                            </div>

