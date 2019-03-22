<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Philanthropicentities'), ['controller' => 'Philanthropicentities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Philanthropicentity'), ['controller' => 'Philanthropicentities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Completename') ?></th>
            <td><?= h($user->completename) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $user->has('group') ? $this->Html->link($user->group->id, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastaccess') ?></th>
            <td><?= h($user->lastaccess) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Philanthropicentities') ?></h4>
        <?php if (!empty($user->philanthropicentities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Telephone') ?></th>
                <th scope="col"><?= __('Whatsapp') ?></th>
                <th scope="col"><?= __('Address1') ?></th>
                <th scope="col"><?= __('Address2') ?></th>
                <th scope="col"><?= __('Zipcode') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->philanthropicentities as $philanthropicentities): ?>
            <tr>
                <td><?= h($philanthropicentities->id) ?></td>
                <td><?= h($philanthropicentities->name) ?></td>
                <td><?= h($philanthropicentities->image) ?></td>
                <td><?= h($philanthropicentities->description) ?></td>
                <td><?= h($philanthropicentities->email) ?></td>
                <td><?= h($philanthropicentities->telephone) ?></td>
                <td><?= h($philanthropicentities->whatsapp) ?></td>
                <td><?= h($philanthropicentities->address1) ?></td>
                <td><?= h($philanthropicentities->address2) ?></td>
                <td><?= h($philanthropicentities->zipcode) ?></td>
                <td><?= h($philanthropicentities->city) ?></td>
                <td><?= h($philanthropicentities->state) ?></td>
                <td><?= h($philanthropicentities->user_id) ?></td>
                <td><?= h($philanthropicentities->status) ?></td>
                <td><?= h($philanthropicentities->created) ?></td>
                <td><?= h($philanthropicentities->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Philanthropicentities', 'action' => 'view', $philanthropicentities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Philanthropicentities', 'action' => 'edit', $philanthropicentities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Philanthropicentities', 'action' => 'delete', $philanthropicentities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $philanthropicentities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
