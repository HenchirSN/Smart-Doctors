<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ordonnance $ordonnance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ordonnance'), ['action' => 'edit', $ordonnance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ordonnance'), ['action' => 'delete', $ordonnance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordonnance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ordonnances'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ordonnance'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Medicaments'), ['controller' => 'Medicaments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medicament'), ['controller' => 'Medicaments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ordonnances view large-9 medium-8 columns content">
    <h3><?= h($ordonnance->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Label') ?></th>
            <td><?= h($ordonnance->label) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $ordonnance->has('user') ? $this->Html->link($ordonnance->user->id, ['controller' => 'Users', 'action' => 'view', $ordonnance->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Medicament') ?></th>
            <td><?= $ordonnance->has('medicament') ? $this->Html->link($ordonnance->medicament->id, ['controller' => 'Medicaments', 'action' => 'view', $ordonnance->medicament->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ordonnance->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ordonnance->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ordonnance->modified) ?></td>
        </tr>
    </table>
</div>
