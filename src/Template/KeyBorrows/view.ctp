<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Key Borrow'), ['action' => 'edit', $keyBorrow->id], ['class' => 'btn']) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Key Borrow'), ['action' => 'delete', $keyBorrow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $keyBorrow->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Key Borrows'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Key Borrow'), ['action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('List Keys'), ['controller' => 'Keys', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Key'), ['controller' => 'Keys', 'action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
            </ul>
</nav>
<div class="keyBorrows view large-9 medium-8 columns content">
    <h3><?= h($keyBorrow->id) ?></h3>
    <table class="vertical-table">
                                <tr>
            <th><?= __('Key') ?></th>
            <td><?= $keyBorrow->has('key') ? $this->Html->link($keyBorrow->key->name, ['controller' => 'Keys', 'action' => 'view', $keyBorrow->key->id]) : '' ?></td>
        </tr>
                                <tr>
            <th><?= __('User') ?></th>
            <td><?= $keyBorrow->has('user') ? $this->Html->link($keyBorrow->user->name, ['controller' => 'Users', 'action' => 'view', $keyBorrow->user->id]) : '' ?></td>
        </tr>
                                                        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($keyBorrow->id) ?></td>
        </tr>
                                        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($keyBorrow->created) ?></td>
        </tr>
                            </table>
        </div>
