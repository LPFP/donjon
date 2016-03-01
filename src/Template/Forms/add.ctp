<div class="row">
<div class="span12">

<div class="well well-small">
        <?= $this->Html->link(__('List Forms'), ['action' => 'index'], [ 'class'=> 'btn btn-sm btn-default']) ?>
</div>
</div>
</div>

<div class="row">
    <div class="span12">

<div class="forms">
    <?= $this->Form->create($form) ?>
    <fieldset>
        <legend><?= __('Add Form') ?></legend>
        <?php
            echo $this->Form->input('type');
            echo $this->Form->input('values');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
    </div>
