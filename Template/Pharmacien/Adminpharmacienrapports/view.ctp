<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Adminpharmacienrapport $adminpharmacienrapport
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Adminpharmacienrapport'), ['action' => 'edit', $adminpharmacienrapport->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Adminpharmacienrapport'), ['action' => 'delete', $adminpharmacienrapport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminpharmacienrapport->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Adminpharmacienrapports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Adminpharmacienrapport'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adminpharmacienrapports view large-9 medium-8 columns content">
    <h3><?= h($adminpharmacienrapport->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Objet') ?></th>
            <td><?= h($adminpharmacienrapport->objet) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adminpharmacienrapport->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($adminpharmacienrapport->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($adminpharmacienrapport->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Rapport') ?></h4>
        <?= $this->Text->autoParagraph(h($adminpharmacienrapport->rapport)); ?>
    </div>
</div>
