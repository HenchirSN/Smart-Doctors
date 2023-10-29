


<!doctype html>
<html lang="en">

  
    <?= $this->element('docteur/head'); ?>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <?= $this->element('docteur/menu'); ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
               <?= $this->element('docteur/topnav'); ?>
           
                        
                <!-- Top Bar End -->



                <!--  Page content -->
                    <?= $this->fetch('content'); ?>
                <!--  Page content -->

                <!-- footer -->
                <?= $this->element('docteur/footer'); ?>
                <!-- footer -->
                

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



       <?= $this->element('docteur/js'); ?>

      
    </body>
</html>