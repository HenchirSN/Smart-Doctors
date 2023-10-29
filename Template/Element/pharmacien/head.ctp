    <head>
        <meta charset="utf-8" />
        <title>Smartdoctors    </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <?= $this->Html->meta(
         'favicon1.jpg',
         'img/favicon1.jpg',
         ['type' => 'icon']
         );
        ?>
        
        <?= $this->fetch('css') ?>

        <!-- App css -->
        <?= $this->Html->css('admin/bootstrap.min') ?>
        <?= $this->Html->css('admin/icons') ?>
        <?= $this->Html->css('admin/metismenu.min') ?>
        <?= $this->Html->css('admin/style') ?>
        
        <?= $this->Html->script('admin/modernizr.min') ?>
        

    </head>
