<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admindocteurrapport $admindocteurrapport
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $admindocteurrapport->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $admindocteurrapport->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Admindocteurrapports'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="admindocteurrapports form large-9 medium-8 columns content">
    <?= $this->Form->create($admindocteurrapport) ?>
    <fieldset>
        <legend><?= __('Edit Admindocteurrapport') ?></legend>
        <?php
            echo $this->Form->control('objet');
            echo $this->Form->control('rapport');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
