<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Account'), ['action' => 'edit', $account->id], ['class' => 'btn']) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Account'), ['action' => 'delete', $account->id], ['confirm' => __('Are you sure you want to delete # {0}?', $account->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Accounts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['action' => 'add']) ?> </li>
            </ul>
</nav>
<div class="accounts view large-9 medium-8 columns content">
    <h3><?= h($account->id) ?></h3>
    <table class="vertical-table">
                                        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($account->id) ?></td>
        </tr>
                <tr>
            <th><?= __('Amount') ?></th>
            <td><?= $this->Number->format($account->amount) ?></td>
        </tr>
                                        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($account->created) ?></td>
        </tr>
                <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($account->modified) ?></td>
        </tr>
                                        <tr>
            <th><?= __('Is Income') ?></th>
            <td><?= $account->is_income ? __('Yes') : __('No'); ?></td>
        </tr>
                    </table>
        </div>
