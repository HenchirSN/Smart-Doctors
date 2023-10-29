


<!doctype html>
<html lang="en">

  
    <?= $this->element('pharmacien/head'); ?>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <?= $this->element('pharmacien/menu'); ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
               <?= $this->element('pharmacien/topnav'); ?>
           
                        
                <!-- Top Bar End -->



                <!--  Page content -->
                    <?= $this->fetch('content'); ?>
                <!--  Page content -->

                <!-- footer -->
                <?= $this->element('pharmacien/footer'); ?>
                <!-- footer -->
                

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



       <?= $this->element('pharmacien/js'); ?>

      
    </body>
</html>