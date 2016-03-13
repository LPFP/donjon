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
                        <?= $this->Html->link(__('List Profiles'), ['action' => 'index'], ['class' => 'btn btn-sm btn-default']) ?>
                        <?php
            echo
            $this->Html->link(__('List Users'), [
            'controller' => 'Users',
            'action' => 'index'], ['class' => 'btn btn-sm btn-default']);
            ?>
            <?php
            echo
            $this->Html->link(__('New User'), [
            'controller' => 'Users',
            'action' => 'add'], [
            'class' => 'btn btn-sm btn-default'
            ])
            ?>
                    </div>
    </div>
</div>

<div class="row">
    <div class="span12">
        <div class="profiles">
            <?php echo $this->Form->create($profile , ['form-horizontal']) ?>
            <fieldset>
                <legend><?php __('Add Profile') ?></legend>
                <?php
                                            echo $this->Form->label('name');
                            echo $this->Form->input('name', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('firstname');
                            echo $this->Form->input('firstname', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('biography');
                            echo $this->Form->input('biography', array_merge($opt, ['placeholder' => ""]));
                                        
                
                
                
                
                
                
                
                
                
                
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