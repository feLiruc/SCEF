<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Philanthropicentity[]|\Cake\Collection\CollectionInterface $philanthropicentities
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Philanthropicentity'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="philanthropicentities index large-9 medium-8 columns content">
    <h3><?= __('Philanthropicentities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('whatsapp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zipcode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($philanthropicentities as $philanthropicentity): ?>
            <tr>
                <td><?= $this->Number->format($philanthropicentity->id) ?></td>
                <td><?= h($philanthropicentity->name) ?></td>
                <td><?= h($philanthropicentity->image) ?></td>
                <td><?= h($philanthropicentity->description) ?></td>
                <td><?= h($philanthropicentity->email) ?></td>
                <td><?= h($philanthropicentity->telephone) ?></td>
                <td><?= h($philanthropicentity->whatsapp) ?></td>
                <td><?= h($philanthropicentity->address1) ?></td>
                <td><?= h($philanthropicentity->address2) ?></td>
                <td><?= h($philanthropicentity->zipcode) ?></td>
                <td><?= h($philanthropicentity->city) ?></td>
                <td><?= h($philanthropicentity->state) ?></td>
                <td><?= $philanthropicentity->has('user') ? $this->Html->link($philanthropicentity->user->id, ['controller' => 'Users', 'action' => 'view', $philanthropicentity->user->id]) : '' ?></td>
                <td><?= $this->Number->format($philanthropicentity->status) ?></td>
                <td><?= h($philanthropicentity->created) ?></td>
                <td><?= h($philanthropicentity->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $philanthropicentity->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $philanthropicentity->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $philanthropicentity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $philanthropicentity->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
