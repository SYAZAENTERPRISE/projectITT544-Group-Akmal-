<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record[]|\Cake\Collection\CollectionInterface $records
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Record'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="records index large-9 medium-8 columns content">
    <h3><?= __('Records') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('recordID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('itemID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($records as $record): ?>
            <tr>
                <td><?= $this->Number->format($record->recordID) ?></td>
                <td><?= h($record->size) ?></td>
                <td><?= $this->Number->format($record->status) ?></td>
                <td><?= $this->Number->format($record->id) ?></td>
                <td><?= $this->Number->format($record->itemID) ?></td>
                <td><?= h($record->created) ?></td>
                <td><?= h($record->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $record->recordID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $record->recordID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $record->recordID], ['confirm' => __('Are you sure you want to delete # {0}?', $record->recordID)]) ?>
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
