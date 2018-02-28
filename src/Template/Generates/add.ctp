<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $generate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Generates'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="generates form large-9 medium-8 columns content">
    <?= $this->Form->create($generate) ?>
    <fieldset>
        <legend><?= __('Add Generate') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
