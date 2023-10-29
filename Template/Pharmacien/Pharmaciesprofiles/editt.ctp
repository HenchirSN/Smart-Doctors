<?= $this->Flash->render()  ?>

<?= $this->element('view/temp'); ?>



                                           <?= $this->Form->create($pharmaciesprofile,array("id"=>"basic-form")) ?>
                                         
                                            <div>
                                                
                                                                                              
                                                
                                                <h3>Autre pour pharmaciens</h3>
                                                <section>
                                                     
                                                    

                                                    <div class="form-group">
                                                        <label for="cin">CIN<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.cin',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"CIN" ));  ?>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="datenaissance">Date de naissance<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.datenaissance',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Date de naissance" ));  ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="mobile">mobile<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.mobile',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"mobile" ));  ?>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="mobileautre">Autre Mobile<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.mobileautre',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Autre Mobile" ));  ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="adresse">Adresse <span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.adresse',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Adresse" ));  ?>
                                                    </div>




                                                    <div class="form-group">
                                                        <label for="codepostal">Code postal<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.codepostal',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Code postal" ));  ?>
                                                    </div>




                                                     <div class="form-group">
                                                        <label for="password">Situation familiale<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.situationfamiliale',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Situation familiale" ));  ?>
                                                    </div>


                                                     <div class="form-group">
                                                        <label for="password">Téléphone pharmacie<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.telephonepharmacie',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Téléphone pharmacie" ));  ?>
                                                    </div>

                                                     <div class="form-group">
                                                        <label for="password">Autre Téléphone pharmacie<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.telephonepharmacieautre',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Autre Téléphone pharmacie" ));  ?>
                                                    </div>


                                                     <div class="form-group">
                                                        <label for="type">Adresse pharmacie<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.adressepharmacie',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Adresse pharmacie" ));  ?>
                                                    </div>


                                                     <div class="form-group">
                                                        <label for="mode">Type <span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.mode',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"mode : nuit , jour , garde " ));  ?>
                                                    </div>


                                                </section>

                                               
                                            </div>
                                           
                                        <?= $this->Form->end() ?> 

                                   

       <div class="row m-t-50">
                                
                            </div>

