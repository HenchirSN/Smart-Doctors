


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

                                     <?= $this->Form->create($patientprofile) ?>
                                        <div class="form-group">
                                            

                                        </div>
                                        <div class="form-group">
                                            <label for="cin">CIN   </label>
                                           
                                            <?php echo $this->Form->control('cin',array('label'=>false, "class"=>"form-control", "placeholder"=>"cin"  ));  ?>
                                        </div>


                                        <div class="form-group">
                                            <label for="datenaissance">Mobile   </label>
                                            <?php echo $this->Form->control('mobile',array('label'=>false, "class"=>"form-control", "placeholder"=>"mobile"  ));  ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile">Profession   </label>
                                            <?php echo $this->Form->control('profession',array('label'=>false, "class"=>"form-control", "placeholder"=>"profession"  ));  ?>
                                        </div>
                                          
                                          <div class="form-group">
                                            <label for="mobileautre">Adresse   </label>
                                           
                                            <?php echo $this->Form->control('adresse',array('label'=>false, "class"=>"form-control", "placeholder"=>"adresse"  ));  ?>
                                        </div>


                                        <div class="form-group">
                                            <label for="adresse">Code postal   </label>
                                            <?php echo $this->Form->control('codepostal',array('label'=>false, "class"=>"form-control", "placeholder"=>"codepostal"  ));  ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="codepostal"> Situation familiale  </label>
                                            <?php echo $this->Form->control('situationfamiliale',array('label'=>false, "class"=>"form-control", "placeholder"=>"situationfamiliale"  ));  ?>
                                        
                                       

                                        <div class="form-group text-right m-b-0">
                                            <?= $this->Form->button(__('Valider'),array("class"=>"btn w-lg btn-rounded btn-custom waves-effect waves-light", "type"=>"submit")) ?>
                                            
                                        </div>





                                    <?= $this->Form->end() ?>
                                </div> <!-- end card-box -->
                            </div>
                            <!-- end col -->

                           
</div>
                        <!-- end row -->
