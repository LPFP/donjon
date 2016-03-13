<nav class="well well-small">
    <?= $this->Html->link(__('Edit Groups User'), ['action' => 'edit', $groupsUser->id], ['class' => 'btn']) ?> </li>
<?php echo $this->Form->postLink(__('Delete Groups User'), ['action' => 'delete', $groupsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupsUser->id)]) ?> 
<?php echo $this->Html->link(__('List Groups Users'), ['action' => 'index']) ?> 
<?php echo $this->Html->link(__('New Groups User'), ['action' => 'add']) ?> 
<li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
</nav>
<div class=" row groupsUsers view large-9 medium-8 columns content">
    <div class="col-12">
        <h3><?= h($groupsUser->id) ?></h3>
        <table class="vertical-table">
                                                <tr>
                <th><?= __('Group') ?></th>
                <td><?= $groupsUser->has('group') ? $this->Html->link($groupsUser->group->name, ['controller' => 'Groups', 'action' => 'view', $groupsUser->group->id]) : '' ?></td>
            </tr>
                                                <tr>
                <th><?= __('User') ?></th>
                <td><?= $groupsUser->has('user') ? $this->Html->link($groupsUser->user->id, ['controller' => 'Users', 'action' => 'view', $groupsUser->user->id]) : '' ?></td>
            </tr>
                                                                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($groupsUser->id) ?></td>
            </tr>
                                                        </table>
                    </div>
</div>