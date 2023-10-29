
<?php
       
        $this->Html->css('../plugins/admin/custombox/css/custombox.min', ['block' => true]);
        $this->Html->css('../plugins/admin/datatables/dataTables.bootstrap4.min', ['block' => true]);
        $this->Html->css('../plugins/admin/datatables/buttons.bootstrap4.min', ['block' => true]);
        $this->Html->css('../plugins/admin/datatables/responsive.bootstrap4.min', ['block' => true]);
        $this->Html->css('../plugins/admin/datatables/select.bootstrap4.min', ['block' => true]);

        $this->Html->script('../plugins/admin/datatables/jquery.dataTables.min', ['block' => true]);
        $this->Html->script('../plugins/admin/datatables/dataTables.bootstrap4.min', ['block' => true]);
        $this->Html->script('../plugins/admin/datatables/dataTables.buttons.min', ['block' => true]);
        $this->Html->script('../plugins/admin/datatables/buttons.bootstrap4.min', ['block' => true]);
        $this->Html->script('../plugins/admin/datatables/jszip.min', ['block' => true]);
        $this->Html->script('../plugins/admin/datatables/pdfmake.min', ['block' => true]);
        $this->Html->script('../plugins/admin/datatables/vfs_fonts', ['block' => true]);
        $this->Html->script('../plugins/admin/datatables/buttons.html5.min', ['block' => true]);
        $this->Html->script('../plugins/admin/datatables/buttons.print.min', ['block' => true]);
        $this->Html->script('../plugins/admin/datatables/dataTables.keyTable.min', ['block' => true]);
        $this->Html->script('../plugins/admin/datatables/dataTables.responsive.min', ['block' => true]);
        $this->Html->script('../plugins/admin/datatables/responsive.bootstrap4.min', ['block' => true]);
        $this->Html->script('../plugins/admin/datatables/dataTables.select.min', ['block' => true]);
        $this->Html->script('../plugins/admin/custombox/js/custombox.min', ['block' => true]);
        $this->Html->script('../plugins/admin/custombox/js/legacy.min', ['block' => true]);
       

?>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Roles </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><?= $this->Html->link("Roles" , ['controller' => 'Roles', 'action' => 'index'])?></li>
                                        <li class="breadcrumb-item"><?= $this->Html->link("liste" , ['controller' => 'Roles', 'action' => 'index'])?></li>
                                       
                                    </ol>
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
                                    <h4 class="m-t-0 header-title">Roles List : </h4>
                                    <br/>
                                   
                                    
                                    <?= $this->Flash->render()  ?>
                                    <br/>
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('label') ?></th>
                
               
               
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roles as $role): ?>
            <tr>
                <td><?= $this->Number->format($role->id) ?></td>
                <td><?= h($role->label) ?></td>
                
               
               
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

