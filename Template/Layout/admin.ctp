


<!doctype html>
<html lang="en">

  
    <?= $this->element('admin/head'); ?>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <?= $this->element('admin/menu'); ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
               <?= $this->element('admin/topnav'); ?>
           
                        
                <!-- Top Bar End -->



                <!--  Page content -->
                    <?= $this->fetch('content'); ?>
                <!--  Page content -->

                <!-- footer -->
                <?= $this->element('admin/footer'); ?>
                <!-- footer -->
                

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



       <?= $this->element('admin/js'); ?>

      
    </body>
</html>