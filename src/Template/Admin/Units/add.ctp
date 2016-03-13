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
                        <?= $this->Html->link(__('List Units'), ['action' => 'index'], ['class' => 'btn btn-sm btn-default']) ?>
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
        <div class="units">
            <?php echo $this->Form->create($unit , ['form-horizontal']) ?>
            <fieldset>
                <legend><?php __('Add Unit') ?></legend>
                <?php
                                            echo $this->Form->label('infos');
                            echo $this->Form->input('infos', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('status');
                            echo $this->Form->input('status', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('object_id');
                            echo $this->Form->input('object_id', array_merge($opt, ['options' => $objects]));
                                                    echo $this->Form->label('uuid');
                            echo $this->Form->input('uuid', array_merge($opt, ['placeholder' => ""]));
                                        
                
                
                
                
                
                
                
                
                
                
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