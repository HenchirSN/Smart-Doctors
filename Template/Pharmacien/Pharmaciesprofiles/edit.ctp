<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pharmaciesprofile $pharmaciesprofile
 */
?>







<?= $this->Flash->render()  ?>

<?= $this->element('view/temp'); ?>




                                   

    


<?= $this->Flash->render()  ?>
<br><br><br><br>
<div class="row">
                            <div class="col-lg-12">

                                <div class="card-box">
                                    
                                    <p class="text-muted font-14 m-b-20">
                                       Change personal information.
                                    </p>

                                     <?= $this->Form->create($pharmaciesprofile) ?>
                                        <div class="form-group">
                                            

                                        </div>
                                        <div class="form-group">
                                            <label for="cin">CIN  </label>
                                           
                                            <?php echo $this->Form->control('cin',array('label'=>false, "class"=>"form-control", "placeholder"=>"cin"  ));  ?>
                                        </div>


                                        <div class="form-group">
                                            <label for="datenaissance">Date de naissance  </label>
                                            <?php echo $this->Form->control('datenaissance',array('label'=>false, "class"=>"form-control", "placeholder"=>"Birthdate"  ));  ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile">Mobile  </label>
                                            <?php echo $this->Form->control('mobile',array('label'=>false, "class"=>"form-control", "placeholder"=>"Mobile"  ));  ?>
                                        </div>
                                          
                                          <div class="form-group">
                                            <label for="mobileautre">Mobile autre  </label>
                                           
                                            <?php echo $this->Form->control('mobileautre',array('label'=>false, "class"=>"form-control", "placeholder"=>"Other Mobile "  ));  ?>
                                        </div>


                                        <div class="form-group">
                                            <label for="adresse">Adresse  </label>
                                            <?php echo $this->Form->control('adresse',array('label'=>false, "class"=>"form-control", "placeholder"=>"Adresse"  ));  ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="codepostal"> Code Postal </label>
                                            <?php echo $this->Form->control('codepostal',array('label'=>false, "class"=>"form-control", "placeholder"=>"Postal code"  ));  ?>
                                        </div>

                                             <div class="form-group">
                                            <label for="situationfamiliale"> Situation familiale  </label>
                                           
                                            <?php echo $this->Form->control('situationfamiliale',array('label'=>false, "class"=>"form-control", "placeholder"=>"Situationfamiliale"  ));  ?>
                                        </div>


                                        <div class="form-group">
                                            <label for="telephonepharmacie">Téléphone pharmacie  </label>
                                            <?php echo $this->Form->control('telephonepharmacie',array('label'=>false, "class"=>"form-control", "placeholder"=>"telephonepharmacie"  ));  ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="telephonepharmacieautre">Téléphone pharmacie autre  </label>
                                            <?php echo $this->Form->control('telephonepharmacieautre',array('label'=>false, "class"=>"form-control", "placeholder"=>"telephonepharmacieautre"  ));  ?>
                                        </div>



                                             <div class="form-group">
                                            <label for="pass1">Adresse pharmacie  </label>
                                           
                                            <?php echo $this->Form->control('adressepharmacie',array('label'=>false, "class"=>"form-control", "placeholder"=>"adressepharmacie"  ));  ?>
                                        </div>


                                        <div class="form-group">
                                            <label for="pass2">Mode  </label>
                                            <?php echo $this->Form->control('mode',array('label'=>false, "class"=>"form-control", "placeholder"=>"mode"  ));  ?>
                                        </div>

                                       

                                        <div class="form-group text-right m-b-0">
                                            <?= $this->Form->button(__('Valider'),array("class"=>"btn w-lg btn-rounded btn-custom waves-effect waves-light", "type"=>"submit")) ?>
                                            
                                        </div>





                                    <?= $this->Form->end() ?>
                                </div> <!-- end card-box -->
                            </div>
                            <!-- end col -->

                           
</div>
                        <!-- end row -->
