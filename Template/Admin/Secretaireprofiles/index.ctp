<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Secretaireprofile[]|\Cake\Collection\CollectionInterface $secretaireprofiles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Secretaireprofile'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="secretaireprofiles index large-9 medium-8 columns content">
    <h3><?= __('Secretaireprofiles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('docteur_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codepostal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('situationfamiliale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($secretaireprofiles as $secretaireprofile): ?>
            <tr>
                <td><?= $this->Number->format($secretaireprofile->id) ?></td>
                <td><?= $this->Number->format($secretaireprofile->docteur_id) ?></td>
                <td><?= $this->Number->format($secretaireprofile->mobile) ?></td>
                <td><?= h($secretaireprofile->adresse) ?></td>
                <td><?= h($secretaireprofile->codepostal) ?></td>
                <td><?= $this->Number->format($secretaireprofile->situationfamiliale) ?></td>
                <td><?= h($secretaireprofile->created) ?></td>
                <td><?= $this->Number->format($secretaireprofile->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $secretaireprofile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $secretaireprofile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $secretaireprofile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $secretaireprofile->id)]) ?>
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
