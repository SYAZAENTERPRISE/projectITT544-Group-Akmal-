<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->itemID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->itemID], ['confirm' => __('Are you sure you want to delete # {0}?', $item->itemID)]) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="items view large-9 medium-8 columns content">
    <h3><?= h($item->itemID) ?></h3>
    <?= $this->Form->create($record) ?>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ItemName') ?></th>
            <td><?= h($item->itemName) ?></td>   
        </tr>
        <tr>
            <th scope="row"><?= __('ItemType') ?></th>
            <td><?= h($item->itemType) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ItemID') ?></th>
            <td><?= $this->Number->format($item->itemID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ItemPrice') ?></th>
            <td><?= $this->Number->format($item->itemPrice) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BrandID') ?></th>
            <td><?= $this->Number->format($item->brandID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('StockID') ?></th>
            <td><?= $this->Number->format($item->stockID) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('StockID') ?></th>
            <td><?= $this->Number->format($item->stockID) ?></td>
        </tr>
    </table>
    <a class="btn btn-primary js-scroll-trigger" href="/jerseyProject/items" >Start Ordering</a>
</div>
