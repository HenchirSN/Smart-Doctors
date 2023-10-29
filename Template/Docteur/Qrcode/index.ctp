<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Qrcode[]|\Cake\Collection\CollectionInterface $qrcode
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Qrcode'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Patientprofiles'), ['controller' => 'Patientprofiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Patientprofile'), ['controller' => 'Patientprofiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="qrcode index large-9 medium-8 columns content">
    <h3><?= __('Qrcode') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($qrcode as $qrcode): ?>
            <tr>
                <td><?= $this->Number->format($qrcode->id) ?></td>
                <td><?= h($qrcode->code) ?></td>
                <td><?= h($qrcode->created) ?></td>
                <td><?= h($qrcode->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $qrcode->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $qrcode->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $qrcode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $qrcode->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
