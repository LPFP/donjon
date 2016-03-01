<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fabmanager'), ['action' => 'edit', $fabmanager->id], ['class' => 'btn']) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fabmanager'), ['action' => 'delete', $fabmanager->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fabmanager->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fabmanagers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fabmanager'), ['action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('List Key Borrows'), ['controller' => 'KeyBorrows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Key Borrow'), ['controller' => 'KeyBorrows', 'action' => 'add']) ?> </li>
            </ul>
</nav>
<div class="fabmanagers view large-9 medium-8 columns content">
    <h3><?= h($fabmanager->name) ?></h3>
    <table class="vertical-table">
                                <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($fabmanager->name) ?></td>
        </tr>
                                                        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($fabmanager->id) ?></td>
        </tr>
                                        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($fabmanager->created) ?></td>
        </tr>
                <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($fabmanager->modified) ?></td>
        </tr>
                            </table>
            <div class="related">
        <h4><?= __('Related Key Borrows') ?></h4>
        <?php if (!empty($fabmanager->key_borrows)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Key Id') ?></th>
                                <th><?= __('Fabmanager Id') ?></th>
                                <th><?= __('Created') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fabmanager->key_borrows as $keyBorrows): ?>
            <tr>
                <td><?= h($keyBorrows->id) ?></td>
                <td><?= h($keyBorrows->key_id) ?></td>
                <td><?= h($keyBorrows->fabmanager_id) ?></td>
                <td><?= h($keyBorrows->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'KeyBorrows', 'action' => 'view', $keyBorrows->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'KeyBorrows', 'action' => 'edit', $keyBorrows->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'KeyBorrows', 'action' => 'delete', $keyBorrows->id], ['confirm' => __('Are you sure you want to delete # {0}?', $keyBorrows->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    </div>
