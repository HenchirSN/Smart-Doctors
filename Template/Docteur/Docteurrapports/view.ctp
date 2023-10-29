<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Docteurrapport $docteurrapport
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Docteurrapport'), ['action' => 'edit', $docteurrapport->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Docteurrapport'), ['action' => 'delete', $docteurrapport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $docteurrapport->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Docteurrapports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Docteurrapport'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="docteurrapports view large-9 medium-8 columns content">
    <h3><?= h($docteurrapport->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $docteurrapport->has('user') ? $this->Html->link($docteurrapport->user->firstname, ['controller' => 'Users', 'action' => 'view', $docteurrapport->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($docteurrapport->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($docteurrapport->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($docteurrapport->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Rapport') ?></h4>
        <?= $this->Text->autoParagraph(h($docteurrapport->rapport)); ?>
    </div>
    <div class="row">
        <h4><?= __('Remarques') ?></h4>
        <?= $this->Text->autoParagraph(h($docteurrapport->remarques)); ?>
    </div>
</div>
