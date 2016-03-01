<div class="row">
<div class="span12">

<div class="well well-small">
        <?= $this->Html->link(__('List Key Borrows'), ['action' => 'index'], [ 'class'=> 'btn btn-sm btn-default']) ?>
        <li><?= $this->Html->link(__('List Keys'), ['controller' => 'Keys', 'action' => 'index'], ['class'=> 'btn btn-sm btn-default']) ?></li>
        <li><?= $this->Html->link(__('New Key'), ['controller' => 'Keys', 'action' => 'add'], [ 'class'=> 'btn btn-sm btn-default']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class'=> 'btn btn-sm btn-default']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'], [ 'class'=> 'btn btn-sm btn-default']) ?></li>
</div>
</div>
</div>

<div class="row">
    <div class="span12">

<div class="keyBorrows">
    <?= $this->Form->create($keyBorrow) ?>
    <fieldset>
        <legend><?= __('Add Key Borrow') ?></legend>
        <?php
            echo $this->Form->input('key_id', ['options' => $keys]);
            echo $this->Form->input('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
    </div>
