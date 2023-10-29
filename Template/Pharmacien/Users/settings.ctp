


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
                                       Changer les informations du compte.
                                    </p>

                                     <?= $this->Form->create($user) ?>
                                        <div class="form-group">



                                        </div>
                                        <div class="form-group">
                                            <label for="firstname">Prénom   </label>
                                           
                                            <?php echo $this->Form->control('firstname',array('label'=>false, "class"=>"form-control", "placeholder"=>"cin"  ));  ?>
                                        </div>


                                        <div class="form-group">
                                            <label for="lastname">Nom   </label>
                                            <?php echo $this->Form->control('lastname',array('label'=>false, "class"=>"form-control", "placeholder"=>"Birthdate"  ));  ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile">Région   </label>
                                            <?php echo $this->Form->control('region_id',array('label'=>false, "class"=>"form-control", "placeholder"=>"Mobile"  ));  ?>
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
