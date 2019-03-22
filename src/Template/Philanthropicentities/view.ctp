<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Philanthropicentity $philanthropicentity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Philanthropicentity'), ['action' => 'edit', $philanthropicentity->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Philanthropicentity'), ['action' => 'delete', $philanthropicentity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $philanthropicentity->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Philanthropicentities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Philanthropicentity'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="philanthropicentities view large-9 medium-8 columns content">
    <h3><?= h($philanthropicentity->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($philanthropicentity->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($philanthropicentity->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($philanthropicentity->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($philanthropicentity->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($philanthropicentity->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Whatsapp') ?></th>
            <td><?= h($philanthropicentity->whatsapp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address1') ?></th>
            <td><?= h($philanthropicentity->address1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address2') ?></th>
            <td><?= h($philanthropicentity->address2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zipcode') ?></th>
            <td><?= h($philanthropicentity->zipcode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($philanthropicentity->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($philanthropicentity->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $philanthropicentity->has('user') ? $this->Html->link($philanthropicentity->user->id, ['controller' => 'Users', 'action' => 'view', $philanthropicentity->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($philanthropicentity->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($philanthropicentity->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($philanthropicentity->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($philanthropicentity->modified) ?></td>
        </tr>
    </table>
</div>
