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

                                

                                <li class="menu-title">Administration</li>



                                <li><?= $this->Html->link('<i class="dripicons-trophy"></i><span> Rôles </span>',array('controller'=>'Roles', 'action'=>'index') ,array('escape'=>false)) ?> 
                                </li>





                            <li class="">
    
                                    <a href="javascript: void(0);"><i class="icon-people"></i> <span> Gérer les utilisateurs</span> <span class="menu-arrow"></span></a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                   

                                     <li><?= $this->Html->link('<i class="fa fa-user-md"></i><span> Docteurs </span>',array('controller'=>'Users', 'action'=>'index', 'docteur') ,array('escape'=>false)) ?> 
                                    </li>

                                    <li><?= $this->Html->link('<i class="fa fa-medkit"></i><span> Pharmaciens </span>',array('controller'=>'Users', 'action'=>'index', 'pharmacien') ,array('escape'=>false)) ?> 
                                    </li>




                                </ul>
                            </li>



                            <li class="menu-title">Rapports</li>




                            <li><?= $this->Html->link('<i class="fi-paper"></i><span> Médecins </span>',array('controller'=>'Admindocteurrapports', 'action'=>'index') ,array('escape'=>false)) ?>
                            </li>


                            <li><?= $this->Html->link('<i class="fi-paper"></i><span> Pharmaciens </span>',array('controller'=>'Adminpharmacienrapports', 'action'=>'index') ,array('escape'=>false)) ?>
                            </li>


























                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
          