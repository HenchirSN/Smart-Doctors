<?= $this->element('view/temp'); ?>



                                           <?= $this->Form->create($user,array("id"=>"basic-form")) ?>
                                         
                                            <div>
                                                
                                                <h3>Personnellles</h3>
                                                <section>
                                                   
                                                                                                       
                                                    
                                                  
                                                   <div class="form-group clearfix">
                                                        <label class="control-label " for="firstname">Firstname <span class="text-danger">*</span> :</label>
                                                        <div class="">
                                                           <?php echo $this->Form->control('firstname',array('label'=>false, "class"=>"form-control required", "placeholder"=>"Firstname" ));  ?>
                                                        </div>
                                                    </div>




                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="lastname">Lastname<span class="text-danger">*</span> :</label>
                                                        <div class="">
                                                            <?php echo $this->Form->control('lastname',array('label'=>false, "class"=>"form-control required", "placeholder"=>"Lastname" ));  ?>
                                                        </div>
                                                    </div>




                                                   <div class="form-group clearfix">
                                                        <label class="control-label " for="email">E-mail<span class="text-danger">*</span> :</label>
                                                        <div class="">
                                                       
                                                           <?php echo $this->Form->control('email',array('label'=>false, "class"=>"form-control required",  "placeholder"=>"E-mail" ));  ?>
                                                        </div>
                                                    </div>

                                                     <div class="form-group clearfix">
                                                        <label class="control-label " for="password">Password<span class="text-danger">*</span> :</label>
                                                        <div class="">
                                                           <?php echo $this->Form->control('password',array('label'=>false, "class"=>"form-control required", "placeholder"=>"Password" ));  ?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="region">Region <span class="text-danger">*</span> :</label>
                                                        <div class="">
                                                          <?php echo $this->Form->control('region_id',array('label'=>false, "class"=>"form-control mt-15",'options' => $regions ));  ?>
                                                        </div>
                                                    </div>
                                                  
                                                </section>                                              
                                                
                                                <h3>Autre pour médecin</h3>
                                                <section>
                                                     
                                                    <div class="form-group">
                                                        <label for="cin">CIN <span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.cin',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"CIN" ));  ?>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="datenaissance">Date de naissance<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.datenaissance',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Date de naissance" ));  ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="mobile">Mobile<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.mobile',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Mobile" ));  ?>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="mobile">Autre Mobile<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.mobileautre',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Autre mobile" ));  ?>
                                                    </div>



                                                    <div class="form-group">
                                                        <label for="adresse">Adresse<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.adresse',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Adresse" ));  ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="codepostal">Code postal<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.codepostal',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Code postal" ));  ?>
                                                    </div>





                                                     <div class="form-group">
                                                        <label for="situationfamiliale">Situation familiale<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.situationfamiliale',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Situation familiale" ));  ?>
                                                    </div>




                                                     <div class="form-group">
                                                        <label for="telephonecabinet">Telephone Cabinet<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.telephonecabinet',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Telephone Cabinet" ));  ?>
                                                    </div>



                                                    <div class="form-group">
                                                        <label for="telephonecabinetautre">Autre Telephone Cabinet<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.telephonecabinetautre',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Autre Telephone Cabinet" ));  ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="specialité">Specialité<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.specialité',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"specialité" ));  ?>
                                                    </div>



                                                     <div class="form-group">
                                                        <label for="adressepro">Adresse Professionnelle <span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.adressepro',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Adresse Professionnelle" ));  ?>
                                                    </div>
                                                    



                                                    <div class="form-group">
                                                        <label for="modeexercice">Mode Exercice<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.modeexercice',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Mode Exercice" ));  ?>
                                                    </div>



                                                     

                                                    


                                                     
                                                    


                                                </section>

                                               
                                            </div>
                                           
                                        <?= $this->Form->end() ?> 

                                   

       <div class="row m-t-50">
                                
                            </div>

