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
            ['action' => 'delete', $form->id],
            ['class' => 'pull-right btn btn-sm btn-danger'],
            ['confirm' => __('Are you sure you want to delete # {0}?', $form->id)]
            )
            ?>
                        <?= $this->Html->link(__('List Forms'), ['action' => 'index'], ['class' => 'btn btn-sm btn-default']) ?>
                    </div>
    </div>
</div>

<div class="row">
    <div class="span12">
        <div class="forms">
            <?php echo $this->Form->create($form , ['form-horizontal']) ?>
            <fieldset>
                <legend><?php __('Edit Form') ?></legend>
                <?php
                                            echo $this->Form->label('type');
                            echo $this->Form->input('type', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('values');
                            echo $this->Form->input('values', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('status');
                            echo $this->Form->input('status', array_merge($opt, ['placeholder' => ""]));
                                        
                
                
                
                
                
                
                
                
                
                
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