<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Docprofile $docprofile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Docprofile'), ['action' => 'edit', $docprofile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Docprofile'), ['action' => 'delete', $docprofile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $docprofile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Docprofiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Docprofile'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="docprofiles view large-9 medium-8 columns content">
    <h3><?= h($docprofile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Datenaissance') ?></th>
            <td><?= h($docprofile->datenaissance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Specialité') ?></th>
            <td><?= h($docprofile->specialité) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($docprofile->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adressepro') ?></th>
            <td><?= h($docprofile->adressepro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modeexercice') ?></th>
            <td><?= h($docprofile->modeexercice) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situationfamiliale') ?></th>
            <td><?= h($docprofile->situationfamiliale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($docprofile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cin') ?></th>
            <td><?= $this->Number->format($docprofile->cin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= $this->Number->format($docprofile->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobileautre') ?></th>
            <td><?= $this->Number->format($docprofile->mobileautre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephonecabinet') ?></th>
            <td><?= $this->Number->format($docprofile->telephonecabinet) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephonecabinetautre') ?></th>
            <td><?= $this->Number->format($docprofile->telephonecabinetautre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codepostal') ?></th>
            <td><?= $this->Number->format($docprofile->codepostal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($docprofile->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($docprofile->modified) ?></td>
        </tr>
    </table>
</div>
