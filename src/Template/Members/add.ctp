<div class="row">
<div class="span12">

<div class="well well-small">
        <?= $this->Html->link(__('List Members'), ['action' => 'index'], [ 'class'=> 'btn btn-sm btn-default']) ?>
</div>
</div>
</div>

<div class="row">
    <div class="span12">

<div class="members">
    <?= $this->Form->create($member) ?>
    <fieldset>
        <legend><?= __('Add Member') ?></legend>
        <?php
            echo $this->Form->input('firstname');
            echo $this->Form->input('name');
            echo $this->Form->input('infos');
            echo $this->Form->input('became_member_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
    </div>
