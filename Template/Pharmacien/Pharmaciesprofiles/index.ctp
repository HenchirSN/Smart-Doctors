<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pharmaciesprofile[]|\Cake\Collection\CollectionInterface $pharmaciesprofiles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pharmaciesprofile'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pharmaciesprofiles index large-9 medium-8 columns content">
    <h3><?= __('Pharmaciesprofiles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datenaissance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobileautre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codepostal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('situationfamiliale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephonepharmacie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephonepharmacieautre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adressepharmacie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pharmaciesprofiles as $pharmaciesprofile): ?>
            <tr>
                <td><?= $this->Number->format($pharmaciesprofile->id) ?></td>
                <td><?= $this->Number->format($pharmaciesprofile->cin) ?></td>
                <td><?= h($pharmaciesprofile->datenaissance) ?></td>
                <td><?= $this->Number->format($pharmaciesprofile->mobile) ?></td>
                <td><?= $this->Number->format($pharmaciesprofile->mobileautre) ?></td>
                <td><?= h($pharmaciesprofile->adresse) ?></td>
                <td><?= h($pharmaciesprofile->codepostal) ?></td>
                <td><?= h($pharmaciesprofile->situationfamiliale) ?></td>
                <td><?= h($pharmaciesprofile->telephonepharmacie) ?></td>
                <td><?= $this->Number->format($pharmaciesprofile->telephonepharmacieautre) ?></td>
                <td><?= h($pharmaciesprofile->adressepharmacie) ?></td>
                <td><?= h($pharmaciesprofile->mode) ?></td>
                <td><?= h($pharmaciesprofile->created) ?></td>
                <td><?= h($pharmaciesprofile->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pharmaciesprofile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pharmaciesprofile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pharmaciesprofile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pharmaciesprofile->id)]) ?>
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
