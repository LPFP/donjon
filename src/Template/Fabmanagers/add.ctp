<div class="row">
<div class="span12">

<div class="well well-small">
        <?= $this->Html->link(__('List Fabmanagers'), ['action' => 'index'], [ 'class'=> 'btn btn-sm btn-default']) ?>
        <li><?= $this->Html->link(__('List Key Borrows'), ['controller' => 'KeyBorrows', 'action' => 'index'], ['class'=> 'btn btn-sm btn-default']) ?></li>
        <li><?= $this->Html->link(__('New Key Borrow'), ['controller' => 'KeyBorrows', 'action' => 'add'], [ 'class'=> 'btn btn-sm btn-default']) ?></li>
</div>
</div>
</div>

<div class="row">
    <div class="span12">

<div class="fabmanagers">
    <?= $this->Form->create($fabmanager) ?>
    <fieldset>
        <legend><?= __('Add Fabmanager') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
    </div>
