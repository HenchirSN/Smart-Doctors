


<!doctype html>
<html lang="en">

  
    <?= $this->element('patient/head'); ?>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <?= $this->element('patient/menu'); ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
               <?= $this->element('patient/topnav'); ?>
           
                        
                <!-- Top Bar End -->



                <!--  Page content -->
                    <?= $this->fetch('content'); ?>
                <!--  Page content -->

                <!-- footer -->
                <?= $this->element('patient/footer'); ?>
                <!-- footer -->
                

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



       <?= $this->element('patient/js'); ?>

      
    </body>
</html>