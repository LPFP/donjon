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
                        <?= $this->Html->link(__('List Inventories'), ['action' => 'index'], ['class' => 'btn btn-sm btn-default']) ?>
                        <?php
            echo
            $this->Html->link(__('List Objects'), [
            'controller' => 'Objects',
            'action' => 'index'], ['class' => 'btn btn-sm btn-default']);
            ?>
            <?php
            echo
            $this->Html->link(__('New Object'), [
            'controller' => 'Objects',
            'action' => 'add'], [
            'class' => 'btn btn-sm btn-default'
            ])
            ?>
                    </div>
    </div>
</div>

<div class="row">
    <div class="span12">
        <div class="inventories">
            <?php echo $this->Form->create($inventory , ['form-horizontal']) ?>
            <fieldset>
                <legend><?php __('Add Inventory') ?></legend>
                <?php
                                            echo $this->Form->label('name');
                            echo $this->Form->input('name', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('description');
                            echo $this->Form->input('description', array_merge($opt, ['placeholder' => ""]));
                                        
                
                
                
                
                
                
                
                
                
                
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