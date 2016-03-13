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
            ['action' => 'delete', $transaction->id],
            ['class' => 'pull-right btn btn-sm btn-danger'],
            ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->id)]
            )
            ?>
                        <?= $this->Html->link(__('List Transactions'), ['action' => 'index'], ['class' => 'btn btn-sm btn-default']) ?>
                        <?php
            echo
            $this->Html->link(__('List Transaction Types'), [
            'controller' => 'TransactionTypes',
            'action' => 'index'], ['class' => 'btn btn-sm btn-default']);
            ?>
            <?php
            echo
            $this->Html->link(__('New Transaction Type'), [
            'controller' => 'TransactionTypes',
            'action' => 'add'], [
            'class' => 'btn btn-sm btn-default'
            ])
            ?>
                    </div>
    </div>
</div>

<div class="row">
    <div class="span12">
        <div class="transactions">
            <?php echo $this->Form->create($transaction , ['form-horizontal']) ?>
            <fieldset>
                <legend><?php __('Edit Transaction') ?></legend>
                <?php
                                            echo $this->Form->label('amount');
                            echo $this->Form->input('amount', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('description');
                            echo $this->Form->input('description', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('metas');
                            echo $this->Form->input('metas', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('is_income');
                            echo $this->Form->input('is_income', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('created_by');
                            echo $this->Form->input('created_by', array_merge($opt, ['placeholder' => ""]));
                                                    echo $this->Form->label('transaction_type_id');
                            echo $this->Form->input('transaction_type_id', array_merge($opt, ['options' => $transactionTypes]));
                                        
                
                
                
                
                
                
                
                
                
                
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