
<?= $this->Flash->render()  ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users view large-9 medium-8 columns content">

    <br>
    <br>



    <div class="content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">



                        <table class="table mb-0">
                            <tr>
                                <th scope="row"><?= __('Objet') ?></th>
                                <td><?= h($admindocteurrapport->objet) ?></td>
                            </tr>

                            <tr>
                                <th scope="row"><?= __('Rapport') ?></th>

                                <td><?= h($admindocteurrapport->rapport); ?></td>

                            </tr>


                            <tr>
                                <th scope="row"><?= __('Created') ?></th>
                                <td><?= h($admindocteurrapport->created) ?></td>
                            </tr>

                        </table>


                    </div>

                </div>




            </div>



        </div>

