<?= $this->Flash->render()  ?>
<?= $this->element('view/temp'); ?>



                                           <?= $this->Form->create($user,array("id"=>"basic-form")) ?>
                                         
                                            <div>
                                                
                                                <h3>Personnellles</h3>
                                                <section>
                                                   
                                                                                                       
                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="firstname">Prénom<span class="text-danger">*</span> :</label>
                                                        <div class="">
                                                            <?php echo $this->Form->control('firstname',array('label'=>false, "class"=>"form-control required", "placeholder"=>"Prénom" ));  ?>
                                                        </div>
                                                    </div>
                                                  
                                                   <div class="form-group clearfix">
                                                        <label class="control-label " for="lastname">Nom<span class="text-danger">*</span> :</label>
                                                        <div class="">
                                                           <?php echo $this->Form->control('lastname',array('label'=>false, "class"=>"form-control required", "placeholder"=>"Nom" ));  ?>
                                                        </div>
                                                    </div>

                                                   <div class="form-group clearfix">
                                                        <label class="control-label " for="email">E-mail<span class="text-danger">*</span> :</label>
                                                        <div class="">
                                                       
                                                           <?php echo $this->Form->control('email',array('label'=>false, "class"=>"form-control required",  "placeholder"=>"E-mail" ));  ?>
                                                        </div>
                                                    </div>
                                                     <div class="form-group clearfix">
                                                        <label class="control-label " for="firstname">Mot de passe<span class="text-danger">*</span> :</label>
                                                        <div class="">
                                                           <?php echo $this->Form->control('password',array('label'=>false, "class"=>"form-control required", "placeholder"=>"Mot de passe" ));  ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="adress">Région<span class="text-danger">*</span> :</label>
                                                        <div class="">
                                                          <?php echo $this->Form->control('region_id',array('label'=>false, "class"=>"form-control mt-15",'options' => $regions ));  ?>
                                                        </div>
                                                    </div>
                                                  
                                                </section>                                              
                                                
                                                <h3>Spécifique Pour Pharmaciens</h3>
                                                <section>
                                                     
                                                    

                                                    <div class="form-group">
                                                        <label for="cin">CIN<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('cin',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"CIN" ));  ?>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="datenaissance">Date de naissance<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('datenaissance',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Date de naissance" ));  ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="mobile">mobile<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('mobile',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Mobile" ));  ?>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="mobileautre">Autre Mobile :</label>
                                                        <?php echo $this->Form->control('data.mobileautre',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Autre Mobile" ));  ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="adresse">Adresse <span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('adresse',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Adresse" ));  ?>
                                                    </div>




                                                    <div class="form-group">
                                                        <label for="codepostal">Code postal<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('codepostal',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Code postal" ));  ?>
                                                    </div>




                                                     <div class="form-group">
                                                        <label for="password">Situation familiale<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('situationfamiliale',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Situation familiale" ));  ?>
                                                    </div>


                                                     <div class="form-group">
                                                        <label for="password">Téléphone pharmacie<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.telephonepharmacie',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Téléphone pharmacie" ));  ?>
                                                    </div>

                                                     <div class="form-group">
                                                        <label for="password">Autre Téléphone pharmacie :</label>
                                                        <?php echo $this->Form->control('data.telephonepharmacieautre',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Autre Téléphone pharmacie" ));  ?>
                                                    </div>


                                                     <div class="form-group">
                                                        <label for="type">Adresse pharmacie<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.adressepharmacie',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Adresse pharmacie" ));  ?>
                                                    </div>


                                                     <div class="form-group">
                                                        <label for="mode">Type <span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.mode',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Nuit , jour " ));  ?>
                                                    </div>


                                                </section>

                                               
                                            </div>
                                           
                                        <?= $this->Form->end() ?> 

                                   

       <div class="row m-t-50">
                                
                            </div>

