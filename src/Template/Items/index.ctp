<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item[]|\Cake\Collection\CollectionInterface $items
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Item'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="items index large-9 medium-8 columns content">
    <h3><?= __('Items') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('itemID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('itemName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('itemPrice') ?></th>
                <th scope="col"><?= $this->Paginator->sort('itemType') ?></th>
                <th scope="col"><?= $this->Paginator->sort('brandID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stockID') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
            <tr>
                <td><?= $this->Number->format($item->itemID) ?></td>
                <td><?= h($item->itemName) ?></td>
                <td><?= $this->Number->format($item->itemPrice) ?></td>
                <td><?= h($item->itemType) ?></td>
                <td><?= $this->Number->format($item->brandID) ?></td>
                <td><?= $this->Number->format($item->stockID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $item->itemID]) ?>
                   
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
