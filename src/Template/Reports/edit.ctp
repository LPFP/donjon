<div class="row">
<div class="span12">

<div class="well well-small">
        <?php echo $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $report->id],
                [ 'class'=> 'btn btn-sm btn-danger'],
                ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]
            )
        ?>
        <?= $this->Html->link(__('List Reports'), ['action' => 'index'], [ 'class'=> 'btn btn-sm btn-default']) ?>
</div>
</div>
</div>

<div class="row">
    <div class="span12">

<div class="reports">
    <?= $this->Form->create($report) ?>
    <fieldset>
        <legend><?= __('Edit Report') ?></legend>
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
