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
            ['action' => 'delete', $group->id],
            ['class' => 'pull-right btn btn-sm btn-danger'],
            ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]
            )
            ?>
                        <?= $this->Html->link(__('List Groups'), ['action' => 'index'], ['class' => 'btn btn-sm btn-default']) ?>
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
        <div class="groups">
            <?php echo $this->Form->create($group , ['form-horizontal']) ?>
            <fieldset>
                <legend><?php __('Edit Group') ?></legend>
                <?php
                                            echo $this->Form->label('name');
                            echo $this->Form->input('name', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('slug');
                            echo $this->Form->input('slug', array_merge($opt, ['placeholder' => ""]));
                                    echo $this->Form->input('users._ids', ['options' => $users]);
                                        
                
                
                
                
                
                
                
                
                
                
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