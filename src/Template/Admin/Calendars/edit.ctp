<?php
$opt = [
    'label' => false,
];
$this->loadHelper('Form', [
    'templates' => 'BakeBootstrap3Crud.vertical',
]);
?>

<div class="row">
    <div class="span12">
        <div class="well well-small">
            <?php
            echo $this->Form->postLink(
            __('Delete'), ['action' => 'delete', $calendar->id], ['class' => 'pull-right btn btn-sm btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $calendar->id)]
            )
            ?>
            <?= $this->Html->link(__('List Calendars'), ['action' => 'index'], ['class' => 'btn btn-sm btn-default']) ?>
            <?php
            echo
            $this->Html->link(__('List Events'), [
                'controller' => 'Events',
                'action'     => 'index'], ['class' => 'btn btn-sm btn-default']);
            ?>
            <?php
            echo
            $this->Html->link(__('New Event'), [
                'controller' => 'Events',
                'action'     => 'add'], [
                'class' => 'btn btn-sm btn-default'
            ])
            ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="span12">
        <div class="calendars">
            <?php echo $this->Form->create($calendar, ['form-horizontal']) ?>
            <fieldset>
                <legend><?php __('Edit Calendar') ?></legend>
                <?php
                echo $this->Form->label('name');
                echo $this->Form->input('name', array_merge($opt, ['placeholder' => ""]));
                echo $this->Form->label(__('Parameters'));
                echo $this->Form->input('params', array_merge($opt, ['placeholder' => ""]));
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