<nav class="well well-small">
    <?= $this->Html->link(__('Edit Profile'), ['action' => 'edit', $profile->id], ['class' => 'btn']) ?> </li>
<?php echo $this->Form->postLink(__('Delete Profile'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]) ?> 
<?php echo $this->Html->link(__('List Profiles'), ['action' => 'index']) ?> 
<?php echo $this->Html->link(__('New Profile'), ['action' => 'add']) ?> 
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
</nav>
<div class=" row profiles view large-9 medium-8 columns content">
    <div class="col-12">
        <h3><?= h($profile->name) ?></h3>
        <table class="vertical-table">
                                                <tr>
                <th><?= __('Name') ?></th>
                <td><?= h($profile->name) ?></td>
            </tr>
                                                <tr>
                <th><?= __('Firstname') ?></th>
                <td><?= h($profile->firstname) ?></td>
            </tr>
                                                                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($profile->id) ?></td>
            </tr>
                                                        </table>
                        <div class="row">
            <h4><?= __('Biography') ?></h4>
            <?= $this->Text->autoParagraph(h($profile->biography)); ?>
        </div>
                                <div class="related">
            <h4><?= __('Related Users') ?></h4>
            <?php if (!empty($profile->users)): ?>
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
                <?php foreach ($profile->users as $users): ?>
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