<?php
        
        $this->Html->css('../plugins/admin/custombox/css/custombox.min', ['block' => true]);
        $this->Html->css('../plugins/admin/bootstrap-tagsinput/css/bootstrap-tagsinput', ['block' => true]);
        $this->Html->css('../plugins/admin/bootstrap-select/css/bootstrap-select.min', ['block' => true]);
        $this->Html->css('../plugins/admin/select2/css/select2.min', ['block' => true]);
        $this->Html->css('../plugins/admin/switchery/switchery.min', ['block' => true]);
        $this->Html->css('../plugins/admin/jquery.steps/css/jquery.steps', ['block' => true]);
        $this->Html->css('admin/amine/selectize.default', ['block' => true]);




        $this->Html->script('../plugins/admin/switchery/switchery.min', ['block' => true]);
        $this->Html->script('../plugins/admin/bootstrap-tagsinput/js/bootstrap-tagsinput.min', ['block' => true]);
        $this->Html->script('../plugins/admin/bootstrap-select/js/bootstrap-select', ['block' => true]);


      
        $this->Html->script('../plugins/admin/bootstrap-filestyle/js/bootstrap-filestyle.min', ['block' => true]);
        $this->Html->script('../plugins/admin/bootstrap-maxlength/bootstrap-maxlength', ['block' => true]);
        $this->Html->script('../plugins/admin/autocomplete/jquery.mockjax', ['block' => true]);
        $this->Html->script('../plugins/admin/autocomplete/jquery.autocomplete.min', ['block' => true]);
        $this->Html->script('../plugins/admin/autocomplete/countries', ['block' => true]);
        $this->Html->script('admin/pages/jquery.autocomplete.init', ['block' => true]);
        $this->Html->script('admin/pages/jquery.form-advanced.init', ['block' => true]);
        $this->Html->script('../plugins/admin/custombox/js/custombox.min', ['block' => true]);
        $this->Html->script('../plugins/admin/custombox/js/legacy.min', ['block' => true]);
        $this->Html->script('../plugins/admin/jquery.steps/js/jquery.steps.min', ['block' => true]);
        $this->Html->script('admin/pages/jquery.wizard-init', ['block' => true]);
        $this->Html->script('../plugins/admin/parsleyjs/parsley.min', ['block' => true]);
        $this->Html->scriptBlock("
        $(document).ready(function() {
                $('form').parsley();
            });
        ", ['block' => true]);

?>