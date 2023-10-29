<?php

$this->layout="docteur";
$this->element('view/temp');
$this->Html->css('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', ['block' => true]);
$this->Html->script('//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js', ['block' => true]);
$this->Html->scriptBlock('
  $(".iframe-btn").fancybox({ 
      "width": 900,
      "height": 600,
      "type": "iframe",
      "autoScale": true,
      "minHeight": 280
  });
', ['block' => true]);
?>





                                           <?= $this->Form->create($user,array("id"=>"basic-form")) ?>
                                         
                                            <div>
                                                
                                                <h3>Compte</h3>
                                                <section>
                                                   
                                                                                                       
                                                    
                                                  
                                                   <div class="form-group clearfix">
                                                        <label class="control-label " for="firstname">Firstname<span class="text-danger">*</span> :</label>
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
                                                        <label class="control-label " for="url">votre image<span class="col-9">*</span> :</label>
                                                        <div class="">
                                                            <?php echo $this->Form->control('url',array("label"=>false,  "class"=>"form-control", "placeholder"=>"Choisir votre image"));  ?>
                                                            <div class="input-group-append">
                                                    <span class="input-group-btn">
                                                    <a href="/filemanager/dialog.php?type=1&relative_url=1&field_id=url" class="btn btn-default iframe-btn"><i class="fa fa-upload"></i></a>
                                                    </span>

                                                          </div>
                                                        </div>
                                                    </div>
                                                   <div class="form-group clearfix">
                                                        <label class="control-label " for="email">E-mail<span class="text-danger">*</span> :</label>
                                                        <div class="">
                                                       
                                                           <?php echo $this->Form->control('email',array('label'=>false, "class"=>"form-control required",  "placeholder"=>"E-mail" ));  ?>
                                                        </div>
                                                    </div>
                                                     <div class="form-group clearfix">
                                                        <label class="control-label " for="password">password<span class="text-danger">*</span> :</label>
                                                        <div class="">
                                                           <?php echo $this->Form->control('password',array('label'=>false, "class"=>"form-control required", "placeholder"=>"Password" ));  ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="region">region<span class="text-danger">*</span> :</label>
                                                        <div class="">
                                                          <?php echo $this->Form->control('region_id',array('label'=>false, "class"=>"form-control mt-15",'options' => $regions ));  ?>
                                                        </div>
                                                    </div>
                                                  
                                                </section>                                              
                                                
                                                <h3>Personnellles</h3>
                                                <section>
                                                     


                                                     <div class="form-group">
                                                        <label for="cin">CIN<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.cin',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"CIN " ));  ?>
                                                    </div>



                                                    <div class="form-group">
                                                        <label for="datenaissance">Date de naissance<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.datenaissance',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"datenaissance" ));  ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="mobile">mobile<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.mobile',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"mobile" ));  ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="profession">Profession <span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.profession',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"profession" ));  ?>
                                                    </div>




                                                     <div class="form-group">
                                                        <label for="adresse">Adresse<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.adresse',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Adresse" ));  ?>
                                                    </div>




                                                     <div class="form-group">
                                                        <label for="codepostal">Codepostal<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.codepostal',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Codepostal" ));  ?>
                                                    </div>




                                                     <div class="form-group">
                                                        <label for="situationfamiliale">Situation familiale<span class="text-danger">*</span> :</label>
                                                        <?php echo $this->Form->control('data.situationfamiliale',array('label'=>false, "class"=>"form-control mt-15", "placeholder"=>"Situation familiale" ));  ?>
                                                    </div>


                                                </section>

                                               
                                            </div>
                                           
                                        <?= $this->Form->end() ?> 

                                   

       <div class="row m-t-50">
                                
                            </div>

