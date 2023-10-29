


<!doctype html>
<html lang="en">


<?= $this->element('secretaire/head'); ?>

<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <?= $this->element('secretaire/menu'); ?>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <?= $this->element('secretaire/topnav'); ?>


    <!-- Top Bar End -->



    <!--  Page content -->
    <?= $this->fetch('content'); ?>
    <!--  Page content -->

    <!-- footer -->
    <?= $this->element('secretaire/footer'); ?>
    <!-- footer -->


</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->



<?= $this->element('secretaire/js'); ?>


</body>
</html>