<?= $this->Flash->render()  ?>

<br><br><br><br>
<div class="row">
                            <div class="col-lg-12">

                                <div class="card-box">
                                    
                                    <p class="text-muted font-14 m-b-20">
                                        Changer E-mail
                                    </p>

                                     <?= $this->Form->create() ?>
                                        <div class="form-group">
                                            

                                        </div>
                                        <div class="form-group">
                                            <label for="mail1">Nouveau E-mail <span class="text-danger">*</span></label>
                                           
                                            <?php echo $this->Form->control('mail1',array('label'=>false, "class"=>"form-control", "placeholder"=>"Nouveau E-mail "  ));  ?>
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
