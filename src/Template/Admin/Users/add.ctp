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
                        <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'btn btn-sm btn-default']) ?>
                        <?php
            echo
            $this->Html->link(__('List Profiles'), [
            'controller' => 'Profiles',
            'action' => 'index'], ['class' => 'btn btn-sm btn-default']);
            ?>
            <?php
            echo
            $this->Html->link(__('New Profile'), [
            'controller' => 'Profiles',
            'action' => 'add'], [
            'class' => 'btn btn-sm btn-default'
            ])
            ?>
                        <?php
            echo
            $this->Html->link(__('List Key Borrows'), [
            'controller' => 'KeyBorrows',
            'action' => 'index'], ['class' => 'btn btn-sm btn-default']);
            ?>
            <?php
            echo
            $this->Html->link(__('New Key Borrow'), [
            'controller' => 'KeyBorrows',
            'action' => 'add'], [
            'class' => 'btn btn-sm btn-default'
            ])
            ?>
                        <?php
            echo
            $this->Html->link(__('List Offers'), [
            'controller' => 'Offers',
            'action' => 'index'], ['class' => 'btn btn-sm btn-default']);
            ?>
            <?php
            echo
            $this->Html->link(__('New Offer'), [
            'controller' => 'Offers',
            'action' => 'add'], [
            'class' => 'btn btn-sm btn-default'
            ])
            ?>
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
                    </div>
    </div>
</div>

<div class="row">
    <div class="span12">
        <div class="users">
            <?php echo $this->Form->create($user , ['form-horizontal']) ?>
            <fieldset>
                <legend><?php __('Add User') ?></legend>
                <?php
                                            echo $this->Form->label('email');
                            echo $this->Form->input('email', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('password');
                            echo $this->Form->input('password', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('profile_id');
                            echo $this->Form->input('profile_id', array_merge($opt, ['options' => $profiles]));
                                    echo $this->Form->input('groups._ids', ['options' => $groups]);
                                        
                
                
                
                
                
                
                
                
                
                
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