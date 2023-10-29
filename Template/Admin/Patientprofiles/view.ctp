<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patientprofile $patientprofile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Patientprofile'), ['action' => 'edit', $patientprofile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Patientprofile'), ['action' => 'delete', $patientprofile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patientprofile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Patientprofiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Patientprofile'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="patientprofiles view large-9 medium-8 columns content">
    <h3><?= h($patientprofile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proffesion') ?></th>
            <td><?= h($patientprofile->proffesion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($patientprofile->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situationfamiliale') ?></th>
            <td><?= h($patientprofile->situationfamiliale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($patientprofile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= $this->Number->format($patientprofile->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codepostal') ?></th>
            <td><?= $this->Number->format($patientprofile->codepostal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($patientprofile->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($patientprofile->modified) ?></td>
        </tr>
    </table>
</div>
