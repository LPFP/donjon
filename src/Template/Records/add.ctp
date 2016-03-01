<div class="row">
<div class="span12">

<div class="well well-small">
        <?= $this->Html->link(__('List Records'), ['action' => 'index'], [ 'class'=> 'btn btn-sm btn-default']) ?>
</div>
</div>
</div>

<div class="row">
    <div class="span12">

<div class="records">
    <?= $this->Form->create($record) ?>
    <fieldset>
        <legend><?= __('Add Record') ?></legend>
        <?php
            echo $this->Form->input('summary');
            echo $this->Form->input('type');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
    </div>
