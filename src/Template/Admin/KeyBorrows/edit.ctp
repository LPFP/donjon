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
            ['action' => 'delete', $keyBorrow->id],
            ['class' => 'pull-right btn btn-sm btn-danger'],
            ['confirm' => __('Are you sure you want to delete # {0}?', $keyBorrow->id)]
            )
            ?>
                        <?= $this->Html->link(__('List Key Borrows'), ['action' => 'index'], ['class' => 'btn btn-sm btn-default']) ?>
                        <?php
            echo
            $this->Html->link(__('List Keys'), [
            'controller' => 'Keys',
            'action' => 'index'], ['class' => 'btn btn-sm btn-default']);
            ?>
            <?php
            echo
            $this->Html->link(__('New Key'), [
            'controller' => 'Keys',
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
        <div class="keyBorrows">
            <?php echo $this->Form->create($keyBorrow , ['form-horizontal']) ?>
            <fieldset>
                <legend><?php __('Edit Key Borrow') ?></legend>
                <?php
                                            echo $this->Form->label('key_id');
                            echo $this->Form->input('key_id', array_merge($opt, ['options' => $keys]));
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