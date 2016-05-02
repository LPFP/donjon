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
    </div>

    <div class="col-lg-12">
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
                echo $this->Form->label(__("Events colors border"));
                echo $this->Form->input('parametersBorderColor', array_merge($opt, ['placeholder' => __("Hexadecimal code for border color")]));
                echo $this->Form->label(__("Events background color"));
                echo $this->Form->input('parametersBackgroundColor', array_merge($opt, ['placeholder' => __("Hexadecimal code for background color")]));
                echo $this->Form->label(__("Events text color"));
                echo $this->Form->input('parametersTextColor', array_merge($opt, ['placeholder' => __("Hexadecimal code for text color")]));
                #
                echo $this->Form->label(__("Editable"));
                echo $this->Form->checkbox('is_editable', array_merge($opt, ['placeholder' => __("Editable")]));
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
