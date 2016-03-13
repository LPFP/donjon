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
            __('Delete'),
            ['action' => 'delete', $event->id],
            ['class' => 'pull-right btn btn-sm btn-danger'],
            ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]
            )
            ?>
                        <?= $this->Html->link(__('List Events'), ['action' => 'index'], ['class' => 'btn btn-sm btn-default']) ?>
                        <?php
            echo
            $this->Html->link(__('List Calendars'), [
            'controller' => 'Calendars',
            'action' => 'index'], ['class' => 'btn btn-sm btn-default']);
            ?>
            <?php
            echo
            $this->Html->link(__('New Calendar'), [
            'controller' => 'Calendars',
            'action' => 'add'], [
            'class' => 'btn btn-sm btn-default'
            ])
            ?>
                    </div>
    </div>
</div>

<div class="row">
    <div class="span12">
        <div class="events">
            <?php echo $this->Form->create($event , ['form-horizontal']) ?>
            <fieldset>
                <legend><?php __('Edit Event') ?></legend>
                <?php
                                            echo $this->Form->label('title');
                            echo $this->Form->input('title', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('content');
                            echo $this->Form->input('content', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('begin');
                            echo $this->Form->input('begin', array_merge($opt, ['placeholder' => ""]));
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