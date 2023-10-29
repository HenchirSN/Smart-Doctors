<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Secretaireprofile $secretaireprofile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Secretaireprofile'), ['action' => 'edit', $secretaireprofile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Secretaireprofile'), ['action' => 'delete', $secretaireprofile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $secretaireprofile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Secretaireprofiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Secretaireprofile'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="secretaireprofiles view large-9 medium-8 columns content">
    <h3><?= h($secretaireprofile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($secretaireprofile->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codepostal') ?></th>
            <td><?= h($secretaireprofile->codepostal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($secretaireprofile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Docteur Id') ?></th>
            <td><?= $this->Number->format($secretaireprofile->docteur_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= $this->Number->format($secretaireprofile->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situationfamiliale') ?></th>
            <td><?= $this->Number->format($secretaireprofile->situationfamiliale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= $this->Number->format($secretaireprofile->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($secretaireprofile->created) ?></td>
        </tr>
    </table>
</div>
