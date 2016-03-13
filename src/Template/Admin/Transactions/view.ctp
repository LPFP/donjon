<nav class="well well-small">
    <?= $this->Html->link(__('Edit Transaction'), ['action' => 'edit', $transaction->id], ['class' => 'btn']) ?> </li>
<?php echo $this->Form->postLink(__('Delete Transaction'), ['action' => 'delete', $transaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->id)]) ?> 
<?php echo $this->Html->link(__('List Transactions'), ['action' => 'index']) ?> 
<?php echo $this->Html->link(__('New Transaction'), ['action' => 'add']) ?> 
<li><?= $this->Html->link(__('List Transaction Types'), ['controller' => 'TransactionTypes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Transaction Type'), ['controller' => 'TransactionTypes', 'action' => 'add']) ?> </li>
</ul>
</nav>
<div class=" row transactions view large-9 medium-8 columns content">
    <div class="col-12">
        <h3><?= h($transaction->id) ?></h3>
        <table class="vertical-table">
                                                <tr>
                <th><?= __('Transaction Type') ?></th>
                <td><?= $transaction->has('transaction_type') ? $this->Html->link($transaction->transaction_type->name, ['controller' => 'TransactionTypes', 'action' => 'view', $transaction->transaction_type->id]) : '' ?></td>
            </tr>
                                                                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($transaction->id) ?></td>
            </tr>
                        <tr>
                <th><?= __('Amount') ?></th>
                <td><?= $this->Number->format($transaction->amount) ?></td>
            </tr>
                        <tr>
                <th><?= __('Created By') ?></th>
                <td><?= $this->Number->format($transaction->created_by) ?></td>
            </tr>
                                                            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($transaction->created) ?></td>
            </tr>
                        <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($transaction->modified) ?></td>
            </tr>
                                                            <tr>
                <th><?= __('Is Income') ?></th>
                <td><?= $transaction->is_income ? __('Yes') : __('No'); ?></td>
            </tr>
                                </table>
                        <div class="row">
            <h4><?= __('Description') ?></h4>
            <?= $this->Text->autoParagraph(h($transaction->description)); ?>
        </div>
                <div class="row">
            <h4><?= __('Metas') ?></h4>
            <?= $this->Text->autoParagraph(h($transaction->metas)); ?>
        </div>
                            </div>
</div>