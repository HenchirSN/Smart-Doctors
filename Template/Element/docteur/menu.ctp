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



                               <li class="menu-title">Docteur Tools</li>



                                <li><?= $this->Html->link('<i class="icon-user-follow"></i><span> Liste des Patients </span>',array('controller'=>'Users', 'action'=>'index') ,array('escape'=>false)) ?>
                                     
                                    </li>
                                </br>

                            <li><?= $this->Html->link('<i class="fa fa-medkit"></i><span> Secretaire </span>',array('controller'=>'Users', 'action'=>'indexsec', 'secretaire') ,array('escape'=>false)) ?>
                            </li>

                            </br>

                            <li><?= $this->Html->link('<i class="fa fa-file-text-o"></i><span> ordonnance </span>',array('controller'=>'Ordonnances', 'action'=>'index') ,array('escape'=>false)) ?>
                                     
                                    </li>
                            <li class="">

                                    <a href="javascript: void(0);"><i class="fa fa-file-text-o"></i> <span>Rapports</span> <span class="menu-arrow"></span></a>
                                    <ul class="nav-second-level" aria-expanded="false">

                                    <li><?= $this->Html->link('<i class="fa fa-medkit"></i><span>Des patient</span>',array('controller'=>'Docteurrapports', 'action'=>'index') ,array('escape'=>false)) ?>

                                    </li>
                                    <li><?= $this->Html->link('<i class="fa fa-user"></i><span>Des admin</span>',array('controller'=>'Admindocteurrapports', 'action'=>'index') ,array('escape'=>false)) ?>

                                    </li>

                                </ul>
                            </li>


                            
 <li><?= $this->Html->link('<i class="fi-air-play"></i><span> Gérnerate qr code  </span>',array('controller'=>'Pages', 'action'=>'index') ,array('escape'=>false)) ?>
                                </li>

                                

                        

                            
                           

                                
                           
                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
          