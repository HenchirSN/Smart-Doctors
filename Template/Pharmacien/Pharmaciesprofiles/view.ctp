<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pharmaciesprofile $pharmaciesprofile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pharmaciesprofile'), ['action' => 'edit', $pharmaciesprofile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pharmaciesprofile'), ['action' => 'delete', $pharmaciesprofile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pharmaciesprofile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pharmaciesprofiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pharmaciesprofile'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pharmaciesprofiles view large-9 medium-8 columns content">
    <h3><?= h($pharmaciesprofile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Datenaissance') ?></th>
            <td><?= h($pharmaciesprofile->datenaissance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($pharmaciesprofile->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codepostal') ?></th>
            <td><?= h($pharmaciesprofile->codepostal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situationfamiliale') ?></th>
            <td><?= h($pharmaciesprofile->situationfamiliale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephonepharmacie') ?></th>
            <td><?= h($pharmaciesprofile->telephonepharmacie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adressepharmacie') ?></th>
            <td><?= h($pharmaciesprofile->adressepharmacie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mode') ?></th>
            <td><?= h($pharmaciesprofile->mode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pharmaciesprofile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cin') ?></th>
            <td><?= $this->Number->format($pharmaciesprofile->cin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= $this->Number->format($pharmaciesprofile->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobileautre') ?></th>
            <td><?= $this->Number->format($pharmaciesprofile->mobileautre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephonepharmacieautre') ?></th>
            <td><?= $this->Number->format($pharmaciesprofile->telephonepharmacieautre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pharmaciesprofile->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pharmaciesprofile->modified) ?></td>
        </tr>
    </table>
</div>
