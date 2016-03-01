<div class="row">
<div class="span12">

<div class="well well-small">
        <?php echo $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $key->id],
                [ 'class'=> 'btn btn-sm btn-danger'],
                ['confirm' => __('Are you sure you want to delete # {0}?', $key->id)]
            )
        ?>
        <?= $this->Html->link(__('List Keys'), ['action' => 'index'], [ 'class'=> 'btn btn-sm btn-default']) ?>
        <li><?= $this->Html->link(__('List Key Borrows'), ['controller' => 'KeyBorrows', 'action' => 'index'], ['class'=> 'btn btn-sm btn-default']) ?></li>
        <li><?= $this->Html->link(__('New Key Borrow'), ['controller' => 'KeyBorrows', 'action' => 'add'], [ 'class'=> 'btn btn-sm btn-default']) ?></li>
</div>
</div>
</div>

<div class="row">
    <div class="span12">

<div class="keys">
    <?= $this->Form->create($key) ?>
    <fieldset>
        <legend><?= __('Edit Key') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
    </div>
