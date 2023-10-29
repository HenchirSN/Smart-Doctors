<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pharmaciesprofile $pharmaciesprofile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pharmaciesprofile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pharmaciesprofile->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pharmaciesprofiles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pharmaciesprofiles form large-9 medium-8 columns content">
    <?= $this->Form->create($pharmaciesprofile) ?>
    <fieldset>
        <legend><?= __('Edit Pharmaciesprofile') ?></legend>
        <?php
            echo $this->Form->control('cin');
            echo $this->Form->control('datenaissance');
            echo $this->Form->control('mobile');
            echo $this->Form->control('mobileautre');
            echo $this->Form->control('adresse');
            echo $this->Form->control('codepostal');
            echo $this->Form->control('situationfamiliale');
            echo $this->Form->control('telephonepharmacie');
            echo $this->Form->control('telephonepharmacieautre');
            echo $this->Form->control('adressepharmacie');
            echo $this->Form->control('mode');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
