<!doctype html>
<html lang="en">

    <?= $this->element('admin/head'); ?>
    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('/img/user/bg-2.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <?= $this->Html->link('<span>'.$this->Html->image("admin/logo.png", array("height"=>"150")).'</span>',array('controller'=>'Dashboard', 'action'=>'index', 'prefix'=>false),array('escape'=>false,"class"=>"text-success")) ?>
                            </h2>

                           <?= $this->fetch('content'); ?>

                           

                        </div>
                    </div>

                </div>
            </div>
             


        </div>

    <?= $this->element('admin/js'); ?>

    </body>
</html>