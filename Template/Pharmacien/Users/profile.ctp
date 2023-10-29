
<?= $this->Flash->render()  ?>



<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

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




<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->firstname ) ; echo" ".h( $user->lastname );
        //debug($profile);die;
        ?></h3>
    <br>
    <br>









    <div class="content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title">Informations du profil</h4>
                        <p class="text-muted font-14 m-b-20">
                            Vous pouvez toujours modifier vos données  </code>.
                        </p>
                        <?= $this->Form->create($user) ?>
                        <table class="table mb-0">


                            <tr>
                                <th scope="row"><?= __('Photo de profile') ?></th>
                                <td>
                                    <div class="input-group">
                                        <?php echo $this->Form->control('url',array("label"=>false,  "class"=>"form-control", "placeholder"=>"Choisir votre image"));  ?>

                                        <div class="input-group-append">
                                                    <span class="input-group-btn">
                                                    <a href="/smartdoctorspfe/webroot/filemanager/dialog.php?type=1&relative_url=1&field_id=url" class="btn btn-default iframe-btn"><i class="fa fa-upload"></i></a>
                                                    </span>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Firstname') ?></th>
                                <td>
                                    <?php echo $this->Form->control('firstname',array('label'=>false, "class"=>"form-control"));  ?>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><?= __('Lastname') ?></th>
                                <td>
                                    <?php echo $this->Form->control('lastname',array('label'=>false, "class"=>"form-control"));  ?>

                                </td>
                            </tr>



                            <tr>
                                <th scope="row"><?= __('Email') ?></th>
                                <td><?= h($user->email) ?></td>
                            </tr>


                            <tr>
                                <th scope="row"><?= __('Role') ?></th>
                                <td><?=  h($user->role->alias)?></td>
                            </tr>

                            <tr>
                                <th scope="row"><?= __('Region') ?></th>
                                <td>
                                    <?php echo $this->Form->control('region.label',array('label'=>false, "class"=>"form-control"));  ?>

                                </td>
                            </tr>


                            <? /* T3Agriiiiiib  3al profile */ ?>

                            <tr>
                                <th scope="row"><?= __('Cin') ?></th>
                                <td>
                                    <?php echo $this->Form->control('profile.cin',array('label'=>false, "class"=>"form-control"));  ?>

                                </td>
                            </tr>



                            <tr>
                                <th scope="row"><?= __('datenaissance') ?></th>
                                <td>
                                    <?php echo $this->Form->control('profile.datenaissance',array('label'=>false, "class"=>"form-control"));  ?>

                                </td>
                            </tr>




                            <tr>
                                <th scope="row"><?= __('Mobile') ?></th>
                                <td>
                                    <?php echo $this->Form->control('profile.mobile',array('label'=>false, "class"=>"form-control"));  ?>

                                </td>
                            </tr>




                            <tr>
                                <th scope="row"><?= __('Autre mobile') ?></th>
                                <td>
                                    <?php echo $this->Form->control('profile.mobileautre',array('label'=>false, "class"=>"form-control"));  ?>

                                </td>
                            </tr>






                            <tr>
                                <th scope="row"><?= __('adresse') ?></th>
                                <td>
                                    <?php echo $this->Form->control('profile.adresse',array('label'=>false, "class"=>"form-control"));  ?>

                                </td>
                            </tr>

                            <tr>
                                <th scope="row"><?= __('Adresse du pharmacie') ?></th>
                                <td>
                                    <?php echo $this->Form->control('profile.adressepharmacie',array('label'=>false, "class"=>"form-control"));  ?>

                                </td>
                            </tr>



                            <tr>
                                <th scope="row"><?= __('Téléphone du pharmacie') ?></th>
                                <td>
                                    <?php echo $this->Form->control('profile.telephonepharmacie',array('label'=>false, "class"=>"form-control"));  ?>

                                </td>
                            </tr>

                            <tr>
                                <th scope="row"><?= __('Autre téléphone du pharmacie') ?></th>
                                <td>
                                    <?php echo $this->Form->control('profile.telephonepharmacieautre',array('label'=>false, "class"=>"form-control"));  ?>

                                </td>
                            </tr>


                            <tr>
                                <th scope="row"><?= __('codepostal') ?></th>
                                <td>
                                    <?php echo $this->Form->control('profile.codepostal',array('label'=>false, "class"=>"form-control"));  ?>

                                </td>
                            </tr>


                            <tr>
                                <th scope="row"><?= __('situationfamiliale') ?></th>
                                <td>
                                    <?php echo $this->Form->control('profile.situationfamiliale',array('label'=>false, "class"=>"form-control"));  ?>

                                </td>
                            </tr>






                            <tr>
                                <th scope="row"><?= __('Mode') ?></th>
                                <td>
                                    <?php echo $this->Form->control('profile.mode',array('label'=>false, "class"=>"form-control"));  ?>

                                </td>
                            </tr>
































                        </table>

                        <div class="form-group account-btn text-center m-t-10">
                            <div class="col-12">
                                <?= $this->Form->button(__('Modifier'),array("class"=>"btn w-lg btn-rounded btn-custom waves-effect waves-light", "type"=>"submit")) ?>

                            </div>
                        </div>

                        <?= $this->Form->end() ?>
                    </div>

                </div>




            </div>



        </div>





