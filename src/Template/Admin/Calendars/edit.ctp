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
        <h3><?php echo __("Calendar"); ?></h3>
        <hr>
        <div class="well well-small">
            <?= $this->Html->link(__('Reload'), [], ['class' => 'btn btn-sm btn-default']) ?>
            <?= $this->Html->link(__('close'), [], ['class' => 'btn btn-sm btn-danger']) ?>
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
                echo $this->Form->label(__("Name"));
                echo $this->Form->input('name', array_merge($opt, ['placeholder' => __("")]));
                echo $this->Form->label(__("Public"));
                echo $this->Form->input('is_public', array_merge($opt, ['placeholder' => __("")]));
                #
                echo $this->Form->label(__("Colors"));
                echo $this->Form->input('parameters.borderColor', array_merge($opt, ['placeholder' => __("Hexadecimal code for border color")]));
                echo $this->Form->input('parameters.backgroundColor', array_merge($opt, ['placeholder' => __("Hexadecimal code for background color")]));
                echo $this->Form->input('parameters.textColor', array_merge($opt, ['placeholder' => __("Hexadecimal code for text color")]));
                #
                echo $this->Form->label(__("Editable"));
                echo $this->Form->checkbox('parameters.editable', array_merge($opt, ['placeholder' => __("Editable")]));
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