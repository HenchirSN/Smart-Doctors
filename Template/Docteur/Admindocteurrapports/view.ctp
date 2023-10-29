<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admindocteurrapport $admindocteurrapport
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Admindocteurrapport'), ['action' => 'edit', $admindocteurrapport->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Admindocteurrapport'), ['action' => 'delete', $admindocteurrapport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admindocteurrapport->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Admindocteurrapports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admindocteurrapport'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="admindocteurrapports view large-9 medium-8 columns content">
    <h3><?= h($admindocteurrapport->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Objet') ?></th>
            <td><?= h($admindocteurrapport->objet) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($admindocteurrapport->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($admindocteurrapport->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($admindocteurrapport->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Rapport') ?></h4>
        <?= $this->Text->autoParagraph(h($admindocteurrapport->rapport)); ?>
    </div>
</div>
