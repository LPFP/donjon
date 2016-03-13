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
                        <?= $this->Html->link(__('List Offers'), ['action' => 'index'], ['class' => 'btn btn-sm btn-default']) ?>
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
        <div class="offers">
            <?php echo $this->Form->create($offer , ['form-horizontal']) ?>
            <fieldset>
                <legend><?php __('Add Offer') ?></legend>
                <?php
                                            echo $this->Form->label('offering_seeking');
                            echo $this->Form->input('offering_seeking', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('description');
                            echo $this->Form->input('description', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('units');
                            echo $this->Form->input('units', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('status');
                            echo $this->Form->input('status', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('user_id');
                            echo $this->Form->input('user_id', array_merge($opt, ['options' => $users]));
                                        
                
                
                
                
                
                
                
                
                
                
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