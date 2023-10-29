<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medicament $medicament
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Medicament'), ['action' => 'edit', $medicament->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Medicament'), ['action' => 'delete', $medicament->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicament->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Medicaments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medicament'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ordonnances'), ['controller' => 'Ordonnances', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ordonnance'), ['controller' => 'Ordonnances', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="medicaments view large-9 medium-8 columns content">
    <h3><?= h($medicament->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Label') ?></th>
            <td><?= h($medicament->label) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($medicament->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($medicament->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($medicament->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ordonnances') ?></h4>
        <?php if (!empty($medicament->ordonnances)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Label') ?></th>
                <th scope="col"><?= __('Medicament Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($medicament->ordonnances as $ordonnances): ?>
            <tr>
                <td><?= h($ordonnances->id) ?></td>
                <td><?= h($ordonnances->label) ?></td>
                <td><?= h($ordonnances->medicament_id) ?></td>
                <td><?= h($ordonnances->user_id) ?></td>
                <td><?= h($ordonnances->created) ?></td>
                <td><?= h($ordonnances->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ordonnances', 'action' => 'view', $ordonnances->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ordonnances', 'action' => 'edit', $ordonnances->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ordonnances', 'action' => 'delete', $ordonnances->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordonnances->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
