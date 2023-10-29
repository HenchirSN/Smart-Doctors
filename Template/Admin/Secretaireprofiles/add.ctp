<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Secretaireprofile $secretaireprofile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Secretaireprofiles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="secretaireprofiles form large-9 medium-8 columns content">
    <?= $this->Form->create($secretaireprofile) ?>
    <fieldset>
        <legend><?= __('Add Secretaireprofile') ?></legend>
        <?php
            echo $this->Form->control('docteur_id');
            echo $this->Form->control('mobile');
            echo $this->Form->control('adresse');
            echo $this->Form->control('codepostal');
            echo $this->Form->control('situationfamiliale');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
