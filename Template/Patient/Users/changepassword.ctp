
<?= $this->Flash->render()  ?>
<br><br><br><br>
<div class="row">
                            <div class="col-lg-12">

                                <div class="card-box">
                                    
                                    <p class="text-muted font-14 m-b-20">
                                       Changer Mot de passe.
                                    </p>

                                     <?= $this->Form->create() ?>
                                        <div class="form-group">
                                            

                                        </div>
                                        <div class="form-group">
                                            <label for="pass1">Ancien mot de passe <span class="text-danger">*</span></label>
                                           
                                            <?php echo $this->Form->control('pass1',array('label'=>false, "class"=>"form-control", "placeholder"=>"Ancien password"  ));  ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="pass2">Nouveau mot de passe <span class="text-danger">*</span></label>
                                            <?php echo $this->Form->control('pass2',array('label'=>false, "class"=>"form-control", "placeholder"=>"Nouveau password"  ));  ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="pass3">Confirmation mot de passe <span class="text-danger">*</span></label>
                                            <?php echo $this->Form->control('pass3',array('label'=>false, "class"=>"form-control", "placeholder"=>"Confirmation password"  ));  ?>
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
