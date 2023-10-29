
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
                                       Changer informations personnelles.
                                    </p>

                                     <?= $this->Form->create($docprofile) ?>
                                        <div class="form-group">
                                            

                                        </div>
                                        <div class="form-group">
                                            <label for="cin">CIN </label>
                                           
                                            <?php echo $this->Form->control('cin',array('label'=>false, "class"=>"form-control", "placeholder"=>"cin"  ));  ?>
                                        </div>


                                        <div class="form-group">
                                            <label for="datenaissance">Date de naissance </label>
                                            <?php echo $this->Form->control('datenaissance',array('label'=>false, "class"=>"form-control", "placeholder"=>"Birthdate"  ));  ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile">Mobile </label>
                                            <?php echo $this->Form->control('mobile',array('label'=>false, "class"=>"form-control", "placeholder"=>"Mobile"  ));  ?>
                                        </div>
                                          
                                          <div class="form-group">
                                            <label for="mobileautre">Mobile autre  </label>
                                           
                                            <?php echo $this->Form->control('mobileautre',array('label'=>false, "class"=>"form-control", "placeholder"=>"mobileautre"  ));  ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Code postal </label>
                                           
                                            <?php echo $this->Form->control('codepostal',array('label'=>false, "class"=>"form-control", "placeholder"=>"codepostal"  ));  ?>
                                        </div>


                                        <div class="form-group">
                                            <label for="pass2">Situation familiale </label>
                                            <?php echo $this->Form->control('situationfamiliale',array('label'=>false, "class"=>"form-control", "placeholder"=>"situationfamiliale"  ));  ?>
                                        </div>


                                        <div class="form-group">
                                            <label for="adresse">Téléphone cabinet </label>
                                            <?php echo $this->Form->control('telephonecabinet',array('label'=>false, "class"=>"form-control", "placeholder"=>"telephonecabinet"  ));  ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="telephonecabinetautre"> Téléphone cabinet autre</label>
                                            <?php echo $this->Form->control('telephonecabinetautre',array('label'=>false, "class"=>"form-control", "placeholder"=>"Postal code"  ));  ?>
                                        </div>





                                             <div class="form-group">
                                            <label for="specialité"> Specialité </label>
                                           
                                            <?php echo $this->Form->control('specialité',array('label'=>false, "class"=>"form-control", "placeholder"=>"specialité"  ));  ?>
                                        </div>









                                        <div class="form-group">
                                            <label for="adressepro">Adresse professionnelle </label>
                                            <?php echo $this->Form->control('adressepro',array('label'=>false, "class"=>"form-control", "placeholder"=>"adressepro"  ));  ?>
                                        </div>


                                        <div class="form-group">
                                            <label for="modeexercice">Mode exercice </label>
                                            <?php echo $this->Form->control('modeexercice',array('label'=>false, "class"=>"form-control", "placeholder"=>"modeexercice"  ));  ?>
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
