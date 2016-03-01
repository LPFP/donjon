<div class="row">
<div class="span12">

<div class="well well-small">
        <?php echo $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $account->id],
                [ 'class'=> 'btn btn-sm btn-danger'],
                ['confirm' => __('Are you sure you want to delete # {0}?', $account->id)]
            )
        ?>
        <?= $this->Html->link(__('List Accounts'), ['action' => 'index'], [ 'class'=> 'btn btn-sm btn-default']) ?>
</div>
</div>
</div>

<div class="row">
    <div class="span12">

<div class="accounts">
    <?= $this->Form->create($account) ?>
    <fieldset>
        <legend><?= __('Edit Account') ?></legend>
        <?php
            echo $this->Form->input('is_income');
            echo $this->Form->input('amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
    </div>
