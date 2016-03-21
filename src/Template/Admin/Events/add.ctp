·<?php
$opt = [
    'label' => false,
];
$this->loadHelper('Form', [
    'templates' => 'BakeBootstrap3Crud.vertical',
]);
?>

<div class="row">

</div>

<div class="row">

    <div class="col-lg-12">
        <h3><?php echo __("Add event"); ?></h3>
        <hr>
        <div class="well well-small">
            <?= $this->Html->link(__('Reload'), [], ['class' => 'btn btn-sm btn-default']) ?>
            <?= $this->Html->link(__('close'), [], ['class' => 'btn btn-sm btn-danger']) ?>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="events">
            <?php echo $this->Form->create($event, ['form-horizontal']) ?>
            <fieldset>
                <legend><?php __('Add Event') ?></legend>
                <?php
                echo $this->Form->label(__("Calendrier"));
                echo $this->Form->input('calendar_id', array_merge($opt, ['options' => $calendars]));
                echo $this->Form->label(__("Title"));
                echo $this->Form->input('title', array_merge($opt, ['placeholder' => ""]));
                echo $this->Form->label(__("Description"));
                echo $this->Form->input('content', array_merge($opt, ['placeholder' => ""]));
                # 
                ?>
                <div class="row">
                    <div class="col-lg-6">
                        <?php
                        echo $this->Form->label(__("Start"));
                        echo $this->Form->day('start', ['empty' => __("Day")]);
                        echo $this->Form->month('start', ['empty' => __("Month")]);
                        echo $this->Form->year('start', ['maxYear' => date('Y'), 'minYear' => (date('Y') - 3), 'empty' => __("Year")]);
                        echo $this->Form->hour('start', [ 'format' => 24, 'empty' => __("Hours")]);
                        echo $this->Form->minute('start', [ 'interval' => 10, 'empty' => __("Minutes")]);
                        ?>
                    </div>
                    <div class="col-lg-6">
                        <?php
                        #
                        echo $this->Form->label(__("End"));
                        echo $this->Form->day('end', ['empty' => __("Day")]);
                        echo $this->Form->month('end', ['empty' => __("Month")]);
                        echo $this->Form->year('end', ['maxYear' => date('Y') + 3, 'minYear' => (date('Y')), 'empty' => __("Year")]);
                        echo $this->Form->hour('end', [ 'format' => 24, 'empty' => __("Hours")]);
                        echo $this->Form->minute('end', [ 'interval' => 10, 'empty' => __("Minutes")]);
                        #
                        ?>
                    </div>
                </div>

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
<script>
    $(document).ready(function() {
        if ($(this).val() == "0")
            $(this).addClass("empty");
        else
            $(this).removeClass("empty")
    });
    })

</script>