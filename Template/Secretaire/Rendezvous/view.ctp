<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rendezvous $rendezvous
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rendezvous'), ['action' => 'edit', $rendezvous->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rendezvous'), ['action' => 'delete', $rendezvous->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rendezvous->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rendezvous'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rendezvous'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rendezvous view large-9 medium-8 columns content">
    <h3><?= h($rendezvous->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $rendezvous->has('user') ? $this->Html->link($rendezvous->user->firstname, ['controller' => 'Users', 'action' => 'view', $rendezvous->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($rendezvous->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($rendezvous->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datedebut') ?></th>
            <td><?= h($rendezvous->datedebut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datefin') ?></th>
            <td><?= h($rendezvous->datefin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($rendezvous->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($rendezvous->modified) ?></td>
        </tr>
    </table>
</div>
