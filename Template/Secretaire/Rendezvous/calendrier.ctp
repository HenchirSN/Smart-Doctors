

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Rendez-vous </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><?= $this->Html->link("Rendez-vous " , ['controller' => 'Rendezvous ', 'action' => 'index'])?></li>
                                        <li class="breadcrumb-item"><?= $this->Html->link("Liste" , ['controller' => 'Rendezvous', 'action' => 'index'])?></li>

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
                                    <div class="col-lg-12">

                                        <div class="card-box">
                                            <div class="row">

                                                <div class="col-lg-9">
                                                   <div id="calendar"></div>
                                                </div> <!-- end col -->
                                            </div>  <!-- end row -->
                                        </div>

                                        <!-- BEGIN MODAL -->
                                        <div class="modal fade" id="event-modal" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center border-bottom-0 d-block">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Add New Event</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                    </div>
                                                    <div class="modal-footer border-0 pt-0">
                                                        <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                                        <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Add Category -->
                                        <div class="modal fade" id="add-category" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center border-bottom-0 d-block">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title mt-2">Add a category</h4>
                                                    </div>
                                                    <div class="modal-body p-4">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label class="control-label">Category Name</label>
                                                                <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Choose Category Color</label>
                                                                <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                                    <option value="success">Success</option>
                                                                    <option value="danger">Danger</option>
                                                                    <option value="info">Info</option>
                                                                    <option value="pink">Pink</option>
                                                                    <option value="primary">Primary</option>
                                                                    <option value="warning">Warning</option>
                                                                    <option value="inverse">Inverse</option>
                                                                </select>
                                                            </div>

                                                        </form>

                                                        <div class="text-right">
                                                            <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-custom ml-1 waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END MODAL -->
                                    </div>
                                    <!-- end col-12 -->
                                </div> <!-- end row -->

                            </div> <!-- container -->

                        </div> <!-- content -->



