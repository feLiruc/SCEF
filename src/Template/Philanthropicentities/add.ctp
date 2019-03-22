<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Philanthropicentity $philanthropicentity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Philanthropicentities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="philanthropicentities form large-9 medium-8 columns content">
    <?= $this->Form->create($philanthropicentity) ?>
    <fieldset>
        <legend><?= __('Add Philanthropicentity') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('image');
            echo $this->Form->control('description');
            echo $this->Form->control('email');
            echo $this->Form->control('telephone');
            echo $this->Form->control('whatsapp');
            echo $this->Form->control('address1');
            echo $this->Form->control('address2');
            echo $this->Form->control('zipcode');
            echo $this->Form->control('city');
            echo $this->Form->control('state');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
