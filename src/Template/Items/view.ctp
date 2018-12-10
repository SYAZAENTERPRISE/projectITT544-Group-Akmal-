<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<?= $this->Form->create(null,['type'=>'POST','url'=>['controller'=>'Items','action'=>'temp']])?>
<div class="items view large-9 medium-8 columns content">
    <h3><?= h($item->itemID) ?></h3>
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
            <?= $this->Form->hidden('id',['value'=>$item->itemID])?>
        </tr>
        
        <tr>
            <th scope="row"><?= __('ItemPrice') ?></th>
            <td><?= $this->Number->format($item->itemPrice) ?></td>
        </tr>


    </table>
    <?php echo $this->Html->link('Order','/',['class'=>'btn btn-block btn-success'])?>
    
</div>
<?= $this->Form->end() ?>

