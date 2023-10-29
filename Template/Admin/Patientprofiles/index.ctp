<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patientprofile[]|\Cake\Collection\CollectionInterface $patientprofiles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Patientprofile'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="patientprofiles index large-9 medium-8 columns content">
    <h3><?= __('Patientprofiles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proffesion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codepostal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('situationfamiliale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($patientprofiles as $patientprofile): ?>
            <tr>
                <td><?= $this->Number->format($patientprofile->id) ?></td>
                <td><?= $this->Number->format($patientprofile->mobile) ?></td>
                <td><?= h($patientprofile->proffesion) ?></td>
                <td><?= h($patientprofile->adresse) ?></td>
                <td><?= $this->Number->format($patientprofile->codepostal) ?></td>
                <td><?= h($patientprofile->situationfamiliale) ?></td>
                <td><?= h($patientprofile->created) ?></td>
                <td><?= h($patientprofile->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $patientprofile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $patientprofile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $patientprofile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patientprofile->id)]) ?>
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
