<?= $this->Flash->render()  ?>
<?= $this->element('view/indexelement'); 


?>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>


 <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                       

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                   <h4 class="m-t-0 header-title"><?= $msg ?> </h4>
                                    <br/>
                                    
                                     <?= $this->Html->link("<b>Ajouter</b>",['controller'=>'Users', 'action'=>'add', $type] 
                                     ,array('escape'=>false, "class"=>"btn btn-outline-success waves-light waves-effect")) ?>
                                    
                                    <br/><br/><br/>
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                
                <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->firstname) ?></td>
                <td><?= h($user->lastname) ?></td>
                <td><?= h($user->email) ?></td>
                
                <td><?= $user->has('role') ? $this->Html->link($user->role->label, ['controller' => 'Roles', 'action' => 'view', $user->role->label]) : '' ?></td>
               
                <td><?= $user->has('region') ? $this->Html->link($user->region->label, ['controller' => 'Regions', 'action' => 'view', $user->region->label]) : '' ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(
                            '<i class="fa fa-wrench"></i>',
                            ['action' => 'edit', $user->id],
                            array("escape"=>false, "class"=>"btn btn-outline-primary waves-light waves-effect", "data-animation"=>"fall", "data-plugin"=>"custommodal", "data-overlayspeed"=>"100", "data-overlaycolor"=>"#36404a")) ?>
                            
                            <?= $this->Form->postLink(
                            '<button type="button" class="btn btn-outline-danger waves-light waves-effect"> <i class="fa fa-remove"></i> </button>',
                            ['action' => 'delete', $user->id],
                            ["escape"=>false, 'confirm' => __('Are you sure you want to delete {0}?', $user->label)]) ?>


                           
                        
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

