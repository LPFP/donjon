<div class="row">
<div class="span12">

<div class="well well-small">
        <?php echo $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $member->id],
                [ 'class'=> 'btn btn-sm btn-danger'],
                ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]
            )
        ?>
        <?= $this->Html->link(__('List Members'), ['action' => 'index'], [ 'class'=> 'btn btn-sm btn-default']) ?>
</div>
</div>
</div>

<div class="row">
    <div class="span12">

<div class="members">
    <?= $this->Form->create($member) ?>
    <fieldset>
        <legend><?= __('Edit Member') ?></legend>
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
