<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ordonnance $ordonnance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ordonnance->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ordonnance->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ordonnances'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Medicaments'), ['controller' => 'Medicaments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medicament'), ['controller' => 'Medicaments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordonnances form large-9 medium-8 columns content">
    <?= $this->Form->create($ordonnance) ?>
    <fieldset>
        <legend><?= __('Edit Ordonnance') ?></legend>
        <?php
            echo $this->Form->control('label');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('medicament_id', ['options' => $medicaments]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
