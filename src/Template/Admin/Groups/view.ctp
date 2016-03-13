<nav class="well well-small">
    <?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id], ['class' => 'btn']) ?> </li>
<?php echo $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> 
<?php echo $this->Html->link(__('List Groups'), ['action' => 'index']) ?> 
<?php echo $this->Html->link(__('New Group'), ['action' => 'add']) ?> 
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
</nav>
<div class=" row groups view large-9 medium-8 columns content">
    <div class="col-12">
        <h3><?= h($group->name) ?></h3>
        <table class="vertical-table">
                                                <tr>
                <th><?= __('Name') ?></th>
                <td><?= h($group->name) ?></td>
            </tr>
                                                <tr>
                <th><?= __('Slug') ?></th>
                <td><?= h($group->slug) ?></td>
            </tr>
                                                                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($group->id) ?></td>
            </tr>
                                                            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($group->created) ?></td>
            </tr>
                        <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($group->modified) ?></td>
            </tr>
                                            </table>
                        <div class="related">
            <h4><?= __('Related Users') ?></h4>
            <?php if (!empty($group->users)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                                        <th><?= __('Id') ?></th>
                                        <th><?= __('Email') ?></th>
                                        <th><?= __('Password') ?></th>
                                        <th><?= __('Profile Id') ?></th>
                                        <th><?= __('Created') ?></th>
                                        <th><?= __('Modified') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($group->users as $users): ?>
                <tr>
                    <td><?= h($users->id) ?></td>
                    <td><?= h($users->email) ?></td>
                    <td><?= h($users->password) ?></td>
                    <td><?= h($users->profile_id) ?></td>
                    <td><?= h($users->created) ?></td>
                    <td><?= h($users->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>

            </div>
</div>