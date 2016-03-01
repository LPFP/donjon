<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'btn']) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('List Key Borrows'), ['controller' => 'KeyBorrows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Key Borrow'), ['controller' => 'KeyBorrows', 'action' => 'add']) ?> </li>
            </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
                                <tr>
            <th><?= __('Firstname') ?></th>
            <td><?= h($user->firstname) ?></td>
        </tr>
                                <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
                                <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
                                                        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
                <tr>
            <th><?= __('Type') ?></th>
            <td><?= $this->Number->format($user->type) ?></td>
        </tr>
                                        <tr>
            <th><?= __('Became Member Date') ?></th>
            <td><?= h($user->became_member_date) ?></td>
        </tr>
                <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
                <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
                            </table>
            <div class="row">
        <h4><?= __('Infos') ?></h4>
        <?= $this->Text->autoParagraph(h($user->infos)); ?>
    </div>
                <div class="related">
        <h4><?= __('Related Key Borrows') ?></h4>
        <?php if (!empty($user->key_borrows)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Key Id') ?></th>
                                <th><?= __('User Id') ?></th>
                                <th><?= __('Created') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->key_borrows as $keyBorrows): ?>
            <tr>
                <td><?= h($keyBorrows->id) ?></td>
                <td><?= h($keyBorrows->key_id) ?></td>
                <td><?= h($keyBorrows->user_id) ?></td>
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
