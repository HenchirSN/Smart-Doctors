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

                            <li class="menu-title">Patient </li>






                            <li><?= $this->Html->link('<i class="icon-user-follow"></i><span> Ajouter Patients </span>',array('controller'=>'Users', 'action'=>'index') ,array('escape'=>false)) ?>

                            </li>
                            </br>


                                   

                                     <li><?= $this->Html->link('<i class="icon-user-follow"></i><span> Ajouter un Rendez-vous </span>',array('controller'=>'Rendezvous', 'action'=>'add') ,array('escape'=>false)) ?>
                                    </li>

                            <li><?= $this->Html->link('<i class="fa fa-calendar-plus-o"></i><span>Liste des Rendez-vous </span>',array('controller'=>'Rendezvous', 'action'=>'index') ,array('escape'=>false)) ?>
                            </li>
                            <li><?= $this->Html->link('<i class=" fa fa-calendar-check-o"></i><span>Calendrier</span>',array('controller'=>'Rendezvous', 'action'=>'calendrier') ,array('escape'=>false)) ?>
                            </li>






























                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
          