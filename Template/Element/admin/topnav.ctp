 <div class="content-page">

                <!-- Top Bar Start -->
                 <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            

                          


                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <?= $this->Html->image($pic['url'], array("class"=>"rounded-circle")) ?><span class="ml-1"><?=h($pic['firstname']);?>&nbsp;<?=h($pic['lastname']);?> <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Bienvenu !</h6>
                                    </div>

                                     <?= $this->Html->link('<i class="fi-head"></i> <span>Profil</span>',array('controller'=>'Users', 'action'=>'profile','prefix'=>'admin'
                                     ),array('escape'=>false, "class"=>"dropdown-item notify-item")) ?>


                                        <?= $this->Html->link('<i class="fi-cog"></i> <span>Paramètres</span>',array('controller'=>'Users', 'action'=>'settings','prefix'=>'admin'),array('escape'=>false, "class"=>"dropdown-item notify-item")) ?>


                                        <?= $this->Html->link('<i class="fi-lock"></i> <span> Changer Password </span>',array('controller'=>'Users', 'action'=>'changepassword','prefix'=>'admin'),array('escape'=>false, "class"=>"dropdown-item notify-item")) ?>





                                        <?= $this->Html->link('<i class="fi-mail"></i> <span> Changer E-mail </span>',array('controller'=>'Users', 'action'=>'changemail','prefix'=>'admin'),array('escape'=>false, "class"=>"dropdown-item notify-item")) ?>
                                  
                                    <!-- item-->
                                    <?= $this->Html->link('<i class="fi-power"></i> <span>Déconnexion</span>',array('controller'=>'Users', 'action'=>'logout','prefix'=>false),array('escape'=>false, "class"=>"dropdown-item notify-item")) ?>
                                    
                                </div>
                            </li>

                        </ul>
