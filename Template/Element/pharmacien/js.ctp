        <!-- jQuery  -->
        <?= $this->Html->script('admin/jquery.min') ?>
        <?= $this->Html->script('admin/bootstrap.bundle.min') ?>
        <?= $this->Html->script('admin/metisMenu.min') ?>
        <?= $this->Html->script('admin/waves') ?>
        <?= $this->Html->script('admin/jquery.slimscroll') ?>
        

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



        

      

       