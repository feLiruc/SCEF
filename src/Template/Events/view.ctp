<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Imageevents'), ['controller' => 'Imageevents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imageevent'), ['controller' => 'Imageevents', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="events view large-9 medium-8 columns content">
    <h3><?= h($event->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($event->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($event->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($event->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantityperson') ?></th>
            <td><?= $this->Number->format($event->quantityperson) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entity Id') ?></th>
            <td><?= $this->Number->format($event->entity_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($event->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($event->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($event->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Imageevents') ?></h4>
        <?php if (!empty($event->imageevents)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Url') ?></th>
                <th scope="col"><?= __('Subtitle') ?></th>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($event->imageevents as $imageevents): ?>
            <tr>
                <td><?= h($imageevents->id) ?></td>
                <td><?= h($imageevents->url) ?></td>
                <td><?= h($imageevents->subtitle) ?></td>
                <td><?= h($imageevents->event_id) ?></td>
                <td><?= h($imageevents->created) ?></td>
                <td><?= h($imageevents->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Imageevents', 'action' => 'view', $imageevents->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Imageevents', 'action' => 'edit', $imageevents->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Imageevents', 'action' => 'delete', $imageevents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imageevents->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
