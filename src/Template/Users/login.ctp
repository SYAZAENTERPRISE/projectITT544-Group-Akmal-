<h1> Login </h1>

<?= $this->Form->create()?>
<?= $this->Form->control('username') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button('Login') ?>
<?php echo $this->Html->link('Register','/users/add',['class'=>'btn btn-block btn-success'])?>
<?= $this->Form->end() ?>