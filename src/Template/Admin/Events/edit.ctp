<?php
$opt = [
    'label' => false,
];
$this->loadHelper('Form', [
    'templates' => 'BakeBootstrap3Crud.vertical',
]);
?>

<div class="row">
    <div class="col-lg-12">
        <h3><?php echo __("Event"); ?></h3>
        <hr>

        <nav class="well well-small" id="">
            <?php
            echo $this->Html->link(__('Reload'), $this->Url->build(), ['class' => 'btn btn-sm btn-default']);
            echo $this->Html->link(__('close'), ['#' => '   '], ['class' => 'btn btn-sm btn-danger closeFancybox']);
            echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], [
                'class' => 'pull-right btn btn-sm btn-danger'], [
                'confirm' => __('Are you sure you want to delete # {0}?', $event->id)
            ]);
            ?>
            <div class="clearfix"></div>
        </nav>
    </div>
</div>

<div class="row">
    <div class="span12">
        <div class="events">
            <?php echo $this->Form->create($event, ['form-horizontal']) ?>
            <fieldset>
                <legend><?php __('Edit Event') ?></legend>
                <?php
                echo $this->Form->label('title');
                echo $this->Form->input('title', array_merge($opt, ['placeholder' => ""]));
                echo $this->Form->label('content');
                echo $this->Form->input('content', array_merge($opt, ['placeholder' => ""]));
                echo $this->Form->label('begin');
                echo $this->Form->input('start', array_merge($opt, ['placeholder' => ""]));
                echo $this->Form->label('end');
                echo $this->Form->input('end', array_merge($opt, ['placeholder' => ""]));
                echo $this->Form->label('calendar_id');
                echo $this->Form->input('calendar_id', array_merge($opt, ['options' => $calendars]));
                ?>
            </fieldset>
            <br/>
            <div class="well well-small">
                <?php echo $this->Form->button(__('Submit'), ['class' => 'pull-right btn btn-success']) ?>
                <div class="clearfix"></div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
·