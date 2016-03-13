<nav class="well well-small">
    <?= $this->Html->link(__('Edit Key'), ['action' => 'edit', $key->id], ['class' => 'btn']) ?> </li>
<?php echo $this->Form->postLink(__('Delete Key'), ['action' => 'delete', $key->id], ['confirm' => __('Are you sure you want to delete # {0}?', $key->id)]) ?> 
<?php echo $this->Html->link(__('List Keys'), ['action' => 'index']) ?> 
<?php echo $this->Html->link(__('New Key'), ['action' => 'add']) ?> 
<li><?= $this->Html->link(__('List Key Borrows'), ['controller' => 'KeyBorrows', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Key Borrow'), ['controller' => 'KeyBorrows', 'action' => 'add']) ?> </li>
</ul>
</nav>
<div class=" row keys view large-9 medium-8 columns content">
    <div class="col-12">
        <h3><?= h($key->name) ?></h3>
        <table class="vertical-table">
                                                <tr>
                <th><?= __('Name') ?></th>
                <td><?= h($key->name) ?></td>
            </tr>
                                                                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($key->id) ?></td>
            </tr>
                                                            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($key->created) ?></td>
            </tr>
                        <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($key->modified) ?></td>
            </tr>
                                            </table>
                        <div class="related">
            <h4><?= __('Related Key Borrows') ?></h4>
            <?php if (!empty($key->key_borrows)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                                        <th><?= __('Id') ?></th>
                                        <th><?= __('Key Id') ?></th>
                                        <th><?= __('User Id') ?></th>
                                        <th><?= __('Created') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($key->key_borrows as $keyBorrows): ?>
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
</div>