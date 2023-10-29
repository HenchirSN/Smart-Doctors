<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Docprofile[]|\Cake\Collection\CollectionInterface $docprofiles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Docprofile'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="docprofiles index large-9 medium-8 columns content">
    <h3><?= __('Docprofiles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datenaissance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobileautre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephonecabinet') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephonecabinetautre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('specialité') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adressepro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modeexercice') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codepostal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('situationfamiliale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($docprofiles as $docprofile): ?>
            <tr>
                <td><?= $this->Number->format($docprofile->id) ?></td>
                <td><?= $this->Number->format($docprofile->cin) ?></td>
                <td><?= h($docprofile->datenaissance) ?></td>
                <td><?= $this->Number->format($docprofile->mobile) ?></td>
                <td><?= $this->Number->format($docprofile->mobileautre) ?></td>
                <td><?= $this->Number->format($docprofile->telephonecabinet) ?></td>
                <td><?= $this->Number->format($docprofile->telephonecabinetautre) ?></td>
                <td><?= h($docprofile->specialité) ?></td>
                <td><?= h($docprofile->adresse) ?></td>
                <td><?= h($docprofile->adressepro) ?></td>
                <td><?= h($docprofile->modeexercice) ?></td>
                <td><?= $this->Number->format($docprofile->codepostal) ?></td>
                <td><?= h($docprofile->situationfamiliale) ?></td>
                <td><?= h($docprofile->created) ?></td>
                <td><?= h($docprofile->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $docprofile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $docprofile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $docprofile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $docprofile->id)]) ?>
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
