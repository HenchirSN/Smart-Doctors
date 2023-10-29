<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patientprofile $patientprofile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Patientprofiles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="patientprofiles form large-9 medium-8 columns content">
    <?= $this->Form->create($patientprofile) ?>
    <fieldset>
        <legend><?= __('Add Patientprofile') ?></legend>
        <?php
            echo $this->Form->control('mobile');
            echo $this->Form->control('proffesion');
            echo $this->Form->control('adresse');
            echo $this->Form->control('codepostal');
            echo $this->Form->control('situationfamiliale');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
