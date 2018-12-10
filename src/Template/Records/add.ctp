<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record $record
 */
?>
<div class="records form large-9 medium-8 columns content">
    <?= $this->Form->create($record) ?>
    <fieldset>
        <legend><?= __('Add Record') ?></legend>
        <?php
            echo $this->Form->control('size');
            echo $this->Form->control('status');
            echo $this->Form->control('id');
            echo $this->Form->control('itemID',['value'=>$_SESSION['item_id']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
