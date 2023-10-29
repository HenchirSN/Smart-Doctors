<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Qrcode $qrcode
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $qrcode->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $qrcode->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Qrcode'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Patientprofiles'), ['controller' => 'Patientprofiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Patientprofile'), ['controller' => 'Patientprofiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="qrcode form large-9 medium-8 columns content">
    <?= $this->Form->create($qrcode) ?>
    <fieldset>
        <legend><?= __('Edit Qrcode') ?></legend>
        <?php
            echo $this->Form->control('code');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
