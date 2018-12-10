<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item[]|\Cake\Collection\CollectionInterface $items
 */
?>
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
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $item->itemID]) ?>
                   
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php echo $this->Html->link('json','/items/index.json',['class'=>'btn btn-block btn-success'])?>