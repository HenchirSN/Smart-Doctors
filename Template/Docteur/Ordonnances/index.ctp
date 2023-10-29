
<?=
 $this->element('view/indexelement'); 
 $this->element('view/temp');


?>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Ordonnances </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><?= $this->Html->link("Ordonnances" , ['controller' => 'Users', 'action' => 'index'])?></li>
                                        <li class="breadcrumb-item"><?= $this->Html->link("Liste" , ['controller' => 'Users', 'action' => 'index'])?></li>
                                       
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
                                    <br/>






                                      <?= $this->Html->link("<b>Ajouter</b>",['action' => 'add'],
                            array("escape"=>false, "class"=>"btn btn-success btn-rounded waves-light waves-effect" , "data-overlayspeed"=>"100", "data-overlaycolor"=>"#36404a")) ?>
                                    
                                    <br/><br/><br/>
                                              
                                                </br>
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
           <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('label') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nom') ?></th>
				  <th scope="col"><?= $this->Paginator->sort('Prénom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('medicament') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ordonnances as $ordonnance): ?>
             <tr>
                <td><?= $this->Number->format($ordonnance->id) ?></td>
                <td><?= h($ordonnance->label) ?></td>
				<td><?= h($ordonnance['user']['lastname']) ?></td>
				<td><?= h($ordonnance['user']['firstname']) ?></td>
				<td><?= h($ordonnance['medicament']['label']) ?></td>              
			  <td><?= h($ordonnance->created) ?></td>
                <td><?= h($ordonnance->modified) ?></td>
                
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

