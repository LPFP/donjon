<nav class="well well-small">
    <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'btn']) ?> </li>
<?php echo $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> 
<?php echo $this->Html->link(__('List Users'), ['action' => 'index']) ?> 
<?php echo $this->Html->link(__('New User'), ['action' => 'add']) ?> 
<li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Key Borrows'), ['controller' => 'KeyBorrows', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Key Borrow'), ['controller' => 'KeyBorrows', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Offers'), ['controller' => 'Offers', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Offer'), ['controller' => 'Offers', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
</ul>
</nav>
<div class=" row users view large-9 medium-8 columns content">
    <div class="col-12">
        <h3><?= h($user->id) ?></h3>
        <table class="vertical-table">
                                                <tr>
                <th><?= __('Email') ?></th>
                <td><?= h($user->email) ?></td>
            </tr>
                                                <tr>
                <th><?= __('Password') ?></th>
                <td><?= h($user->password) ?></td>
            </tr>
                                                <tr>
                <th><?= __('Profile') ?></th>
                <td><?= $user->has('profile') ? $this->Html->link($user->profile->name, ['controller' => 'Profiles', 'action' => 'view', $user->profile->id]) : '' ?></td>
            </tr>
                                                                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($user->id) ?></td>
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

                <div class="related">
            <h4><?= __('Related Offers') ?></h4>
            <?php if (!empty($user->offers)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                                        <th><?= __('Id') ?></th>
                                        <th><?= __('Offering Seeking') ?></th>
                                        <th><?= __('Description') ?></th>
                                        <th><?= __('Units') ?></th>
                                        <th><?= __('Status') ?></th>
                                        <th><?= __('Created') ?></th>
                                        <th><?= __('Modified') ?></th>
                                        <th><?= __('User Id') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($user->offers as $offers): ?>
                <tr>
                    <td><?= h($offers->id) ?></td>
                    <td><?= h($offers->offering_seeking) ?></td>
                    <td><?= h($offers->description) ?></td>
                    <td><?= h($offers->units) ?></td>
                    <td><?= h($offers->status) ?></td>
                    <td><?= h($offers->created) ?></td>
                    <td><?= h($offers->modified) ?></td>
                    <td><?= h($offers->user_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Offers', 'action' => 'view', $offers->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Offers', 'action' => 'edit', $offers->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Offers', 'action' => 'delete', $offers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offers->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>

                <div class="related">
            <h4><?= __('Related Groups') ?></h4>
            <?php if (!empty($user->groups)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                                        <th><?= __('Id') ?></th>
                                        <th><?= __('Name') ?></th>
                                        <th><?= __('Slug') ?></th>
                                        <th><?= __('Created') ?></th>
                                        <th><?= __('Modified') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($user->groups as $groups): ?>
                <tr>
                    <td><?= h($groups->id) ?></td>
                    <td><?= h($groups->name) ?></td>
                    <td><?= h($groups->slug) ?></td>
                    <td><?= h($groups->created) ?></td>
                    <td><?= h($groups->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Groups', 'action' => 'view', $groups->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Groups', 'action' => 'edit', $groups->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Groups', 'action' => 'delete', $groups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groups->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>

            </div>
</div>