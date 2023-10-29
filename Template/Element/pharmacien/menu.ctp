<?php //$this->loadmodel('Users') ?>
<div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                   <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="#" class="logo">
                            <span>
                                <?= $this->Html->image('admin/logo.png', array("height"=>"120")) ?>
                                
                            </span>
                            <i>
                                <?= $this->Html->image('admin/logo_sm.png', array("height"=>"28")) ?>
                                
                            </i>
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                         
                            
                        </div>
                      
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Accueil</li>


                            <li><?= $this->Html->link('<i class="fi-air-play"></i><span> Dashboard </span>',array('controller'=>'Dashboard', 'action'=>'index') ,array('escape'=>false)) ?> 
                                </li>

                            <li><?= $this->Html->link('<i class="fa fa-file-text-o"></i><span>Rapports</span>',array('controller'=>'Adminpharmacienrapports', 'action'=>'index') ,array('escape'=>false)) ?>

                            </li>
                            <li><?= $this->Html->link('<i class="fa fa-file-text-o"></i><span>Ordonnances</span>',array('controller'=>'Ordonnances', 'action'=>'index') ,array('escape'=>false)) ?>

                            </li>
                            <li><?= $this->Html->link('<i class="fa fa-medkit"></i><span>Médicaments</span>',array('controller'=>'Medicaments', 'action'=>'index') ,array('escape'=>false)) ?>

                            </li>





                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
          