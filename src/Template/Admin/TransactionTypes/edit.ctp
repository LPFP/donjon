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
            ['action' => 'delete', $transactionType->id],
            ['class' => 'pull-right btn btn-sm btn-danger'],
            ['confirm' => __('Are you sure you want to delete # {0}?', $transactionType->id)]
            )
            ?>
                        <?= $this->Html->link(__('List Transaction Types'), ['action' => 'index'], ['class' => 'btn btn-sm btn-default']) ?>
                        <?php
            echo
            $this->Html->link(__('List Transactions'), [
            'controller' => 'Transactions',
            'action' => 'index'], ['class' => 'btn btn-sm btn-default']);
            ?>
            <?php
            echo
            $this->Html->link(__('New Transaction'), [
            'controller' => 'Transactions',
            'action' => 'add'], [
            'class' => 'btn btn-sm btn-default'
            ])
            ?>
                    </div>
    </div>
</div>

<div class="row">
    <div class="span12">
        <div class="transactionTypes">
            <?php echo $this->Form->create($transactionType , ['form-horizontal']) ?>
            <fieldset>
                <legend><?php __('Edit Transaction Type') ?></legend>
                <?php
                                            echo $this->Form->label('name');
                            echo $this->Form->input('name', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('informations');
                            echo $this->Form->input('informations', array_merge($opt, ['placeholder' => ""]));
                                        
                
                
                
                
                
                
                
                
                
                
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