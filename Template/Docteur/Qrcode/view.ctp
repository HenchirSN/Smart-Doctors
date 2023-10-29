<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Qrcode $qrcode
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Qrcode'), ['action' => 'edit', $qrcode->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Qrcode'), ['action' => 'delete', $qrcode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $qrcode->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Qrcode'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Qrcode'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Patientprofiles'), ['controller' => 'Patientprofiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Patientprofile'), ['controller' => 'Patientprofiles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="qrcode view large-9 medium-8 columns content">
    <h3><?= h($qrcode->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($qrcode->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($qrcode->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($qrcode->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($qrcode->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Patientprofiles') ?></h4>
        <?php if (!empty($qrcode->patientprofiles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cin') ?></th>
                <th scope="col"><?= __('Mobile') ?></th>
                <th scope="col"><?= __('Profession') ?></th>
                <th scope="col"><?= __('Adresse') ?></th>
                <th scope="col"><?= __('Codepostal') ?></th>
                <th scope="col"><?= __('Situationfamiliale') ?></th>
                <th scope="col"><?= __('Qrcode Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($qrcode->patientprofiles as $patientprofiles): ?>
            <tr>
                <td><?= h($patientprofiles->id) ?></td>
                <td><?= h($patientprofiles->cin) ?></td>
                <td><?= h($patientprofiles->mobile) ?></td>
                <td><?= h($patientprofiles->profession) ?></td>
                <td><?= h($patientprofiles->adresse) ?></td>
                <td><?= h($patientprofiles->codepostal) ?></td>
                <td><?= h($patientprofiles->situationfamiliale) ?></td>
                <td><?= h($patientprofiles->qrcode_id) ?></td>
                <td><?= h($patientprofiles->created) ?></td>
                <td><?= h($patientprofiles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Patientprofiles', 'action' => 'view', $patientprofiles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Patientprofiles', 'action' => 'edit', $patientprofiles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Patientprofiles', 'action' => 'delete', $patientprofiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patientprofiles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
