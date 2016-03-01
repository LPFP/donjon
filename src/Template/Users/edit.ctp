<div class="row">
<div class="span12">

<div class="well well-small">
        <?php echo $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                [ 'class'=> 'btn btn-sm btn-danger'],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?>
        <?= $this->Html->link(__('List Users'), ['action' => 'index'], [ 'class'=> 'btn btn-sm btn-default']) ?>
        <li><?= $this->Html->link(__('List Key Borrows'), ['controller' => 'KeyBorrows', 'action' => 'index'], ['class'=> 'btn btn-sm btn-default']) ?></li>
        <li><?= $this->Html->link(__('New Key Borrow'), ['controller' => 'KeyBorrows', 'action' => 'add'], [ 'class'=> 'btn btn-sm btn-default']) ?></li>
</div>
</div>
</div>

<div class="row">
    <div class="span12">

<div class="users">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->input('firstname');
            echo $this->Form->input('name');
            echo $this->Form->input('email');
            echo $this->Form->input('infos');
            echo $this->Form->input('became_member_date');
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
    </div>
