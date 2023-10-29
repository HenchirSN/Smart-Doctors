        <!-- jQuery  -->
        <?= $this->Html->script('admin/jquery.min') ?>
        <?= $this->Html->script('admin/bootstrap.bundle.min') ?>
        <?= $this->Html->script('admin/metisMenu.min') ?>
        <?= $this->Html->script('admin/waves') ?>
        <?= $this->Html->script('admin/jquery.slimscroll') ?>
        <?= $this->Html->script('admin/plugins/switchery/switchery.min') ?>
        <?= $this->Html->script('admin/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min') ?>
        <?= $this->Html->script('admin/plugins/select2/js/select2.min') ?>
        <?= $this->Html->script('admin/plugins/bootstrap-select/js/bootstrap-select') ?>
        <?= $this->Html->script('admin/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min') ?>
        <?= $this->Html->script('admin/plugins/bootstrap-maxlength/bootstrap-maxlength') ?>
        <?= $this->Html->script('admin/plugins/autocomplete/jquery.mockjax') ?>
        <?= $this->Html->script('admin/plugins/autocomplete/jquery.autocomplete.min') ?>
        <?= $this->Html->script('admin/plugins/autocomplete/countries') ?>
        <?= $this->Html->script('admin/pages/jquery.autocomplete.init') ?>
        <?= $this->Html->script('admin/pages/jquery.form-advanced.init') ?>
              <?= $this->Html->script('admin/plugins/moment/moment') ?>
        <?= $this->Html->script('admin/plugins/bootstrap-timepicker/bootstrap-timepicker') ?>
        <?= $this->Html->script('admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min') ?>
        <?= $this->Html->script('admin/plugins/clockpicker/js/bootstrap-clockpicker.min') ?>
        <?= $this->Html->script('admin/plugins/bootstrap-daterangepicker/daterangepicker') ?>
        <?= $this->Html->script('admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min') ?>
        <?= $this->Html->script('admin/pages/jquery.form-pickers.init') ?>

        <?= $this->fetch('script'); ?>
        
        <!-- App js -->
        <?= $this->Html->script('admin/jquery.core') ?>
        <?= $this->Html->script('admin/jquery.app') ?>
        
        <?php 
         $prefix=$this->request->getParam('prefix');
         $action=$this->request->getParam('action');
        
        if (isset($prefix) && $action=='index' ) {
         echo $this->Html->script('admin/datatable');
        }

        

        ?>



        

      

       