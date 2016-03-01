<div class="row">
<div class="span12">

<div class="well well-small">
        <?= $this->Html->link(__('List Accounts'), ['action' => 'index'], [ 'class'=> 'btn btn-sm btn-default']) ?>
</div>
</div>
</div>

<div class="row">
    <div class="span12">

<div class="accounts">
    <?= $this->Form->create($account) ?>
    <fieldset>
        <legend><?= __('Add Account') ?></legend>
        <?php
            echo $this->Form->input('is_income');
            echo $this->Form->input('amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
    </div>
