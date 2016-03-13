<nav class="well well-small">
    <?= $this->Html->link(__('Edit Transaction Type'), ['action' => 'edit', $transactionType->id], ['class' => 'btn']) ?> </li>
<?php echo $this->Form->postLink(__('Delete Transaction Type'), ['action' => 'delete', $transactionType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionType->id)]) ?> 
<?php echo $this->Html->link(__('List Transaction Types'), ['action' => 'index']) ?> 
<?php echo $this->Html->link(__('New Transaction Type'), ['action' => 'add']) ?> 
<li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?> </li>
</ul>
</nav>
<div class=" row transactionTypes view large-9 medium-8 columns content">
    <div class="col-12">
        <h3><?= h($transactionType->name) ?></h3>
        <table class="vertical-table">
                                                <tr>
                <th><?= __('Name') ?></th>
                <td><?= h($transactionType->name) ?></td>
            </tr>
                                                                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($transactionType->id) ?></td>
            </tr>
                                                            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($transactionType->created) ?></td>
            </tr>
                        <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($transactionType->modified) ?></td>
            </tr>
                                            </table>
                        <div class="row">
            <h4><?= __('Informations') ?></h4>
            <?= $this->Text->autoParagraph(h($transactionType->informations)); ?>
        </div>
                                <div class="related">
            <h4><?= __('Related Transactions') ?></h4>
            <?php if (!empty($transactionType->transactions)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                                        <th><?= __('Id') ?></th>
                                        <th><?= __('Amount') ?></th>
                                        <th><?= __('Description') ?></th>
                                        <th><?= __('Metas') ?></th>
                                        <th><?= __('Is Income') ?></th>
                                        <th><?= __('Created') ?></th>
                                        <th><?= __('Modified') ?></th>
                                        <th><?= __('Created By') ?></th>
                                        <th><?= __('Transaction Type Id') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($transactionType->transactions as $transactions): ?>
                <tr>
                    <td><?= h($transactions->id) ?></td>
                    <td><?= h($transactions->amount) ?></td>
                    <td><?= h($transactions->description) ?></td>
                    <td><?= h($transactions->metas) ?></td>
                    <td><?= h($transactions->is_income) ?></td>
                    <td><?= h($transactions->created) ?></td>
                    <td><?= h($transactions->modified) ?></td>
                    <td><?= h($transactions->created_by) ?></td>
                    <td><?= h($transactions->transaction_type_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Transactions', 'action' => 'view', $transactions->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Transactions', 'action' => 'edit', $transactions->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transactions', 'action' => 'delete', $transactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactions->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>

            </div>
</div>