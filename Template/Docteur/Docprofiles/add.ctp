<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Docprofile $docprofile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Docprofiles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="docprofiles form large-9 medium-8 columns content">
    <?= $this->Form->create($docprofile) ?>
    <fieldset>
        <legend><?= __('Add Docprofile') ?></legend>
        <?php
            echo $this->Form->control('cin');
            echo $this->Form->control('datenaissance');
            echo $this->Form->control('mobile');
            echo $this->Form->control('mobileautre');
            echo $this->Form->control('telephonecabinet');
            echo $this->Form->control('telephonecabinetautre');
            echo $this->Form->control('specialité');
            echo $this->Form->control('adresse');
            echo $this->Form->control('adressepro');
            echo $this->Form->control('modeexercice');
            echo $this->Form->control('codepostal');
            echo $this->Form->control('situationfamiliale');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
