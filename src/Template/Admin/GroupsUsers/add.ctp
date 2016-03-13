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
                        <?= $this->Html->link(__('List Groups Users'), ['action' => 'index'], ['class' => 'btn btn-sm btn-default']) ?>
                        <?php
            echo
            $this->Html->link(__('List Groups'), [
            'controller' => 'Groups',
            'action' => 'index'], ['class' => 'btn btn-sm btn-default']);
            ?>
            <?php
            echo
            $this->Html->link(__('New Group'), [
            'controller' => 'Groups',
            'action' => 'add'], [
            'class' => 'btn btn-sm btn-default'
            ])
            ?>
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
        <div class="groupsUsers">
            <?php echo $this->Form->create($groupsUser , ['form-horizontal']) ?>
            <fieldset>
                <legend><?php __('Add Groups User') ?></legend>
                <?php
                                            echo $this->Form->label('group_id');
                            echo $this->Form->input('group_id', array_merge($opt, ['options' => $groups]));
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