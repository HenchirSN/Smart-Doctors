<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medicament $medicament
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $medicament->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $medicament->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Medicaments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ordonnances'), ['controller' => 'Ordonnances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ordonnance'), ['controller' => 'Ordonnances', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="medicaments form large-9 medium-8 columns content">
    <?= $this->Form->create($medicament) ?>
    <fieldset>
        <legend><?= __('Edit Medicament') ?></legend>
        <?php
            echo $this->Form->control('label');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
