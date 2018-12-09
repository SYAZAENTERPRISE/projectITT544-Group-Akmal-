<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record $record
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Record'), ['action' => 'edit', $record->recordID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Record'), ['action' => 'delete', $record->recordID], ['confirm' => __('Are you sure you want to delete # {0}?', $record->recordID)]) ?> </li>
        <li><?= $this->Html->link(__('List Records'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Record'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="records view large-9 medium-8 columns content">
    <h3><?= h($record->recordID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Size') ?></th>
            <td><?= h($record->size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RecordID') ?></th>
            <td><?= $this->Number->format($record->recordID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($record->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($record->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ItemID') ?></th>
            <td><?= $this->Number->format($record->itemID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($record->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($record->modified) ?></td>
        </tr>
    </table>
</div>
