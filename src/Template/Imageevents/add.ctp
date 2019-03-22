<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Imageevent $imageevent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Imageevents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imageevents form large-9 medium-8 columns content">
    <?= $this->Form->create($imageevent) ?>
    <fieldset>
        <legend><?= __('Add Imageevent') ?></legend>
        <?php
            echo $this->Form->control('url');
            echo $this->Form->control('subtitle');
            echo $this->Form->control('event_id', ['options' => $events]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
