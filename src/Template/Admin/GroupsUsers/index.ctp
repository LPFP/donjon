<div class="groupsUsers row-fluid">
    <h3><?= __('Groups Users') ?></h3>
    <hr/>
    <nav class="well well-small" id="">
        <?php
        echo $this->Html->link('<i class="fa fa-plus"></i> ' . __('New Groups User'), ['action' => 'add'], ['class' => 'btn btn-default btn-sm', 'escape' => false]);
        echo '&nbsp;';
        ?>
                <?php
        echo $this->Html->link('<i class="fa fa-list"></i> ' . __('List Groups'), ['controller' => 'Groups', 'action' => 'index'], ['escape' => false, 'class' => 'btn btn-default btn-sm']);
        echo '&nbsp;';
        echo $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add'], ['escape' => false, 'class' => 'btn btn-default btn-sm']);
        echo '&nbsp;';
        ?>
                <?php
        echo $this->Html->link('<i class="fa fa-list"></i> ' . __('List Users'), ['controller' => 'Users', 'action' => 'index'], ['escape' => false, 'class' => 'btn btn-default btn-sm']);
        echo '&nbsp;';
        echo $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'], ['escape' => false, 'class' => 'btn btn-default btn-sm']);
        echo '&nbsp;';
        ?>
                </ul>
    </nav>


    <table cellpadding="0" cellspacing="0" class="table table condensed table-hover table-responsive table-striped">
        <thead>
            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('group_id') ?></th>
                                <th><?= $this->Paginator->sort('user_id') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($groupsUsers as $groupsUser): ?>
            <tr>
                                <td><?= $this->Number->format($groupsUser->id) ?></td>
                                <td><?= $groupsUser->has('group') ? $this->Html->link($groupsUser->group->name, ['controller' => 'Groups', 'action' => 'view', $groupsUser->group->id]) : '' ?></td>
                                <td><?= $groupsUser->has('user') ? $this->Html->link($groupsUser->user->id, ['controller' => 'Users', 'action' => 'view', $groupsUser->user->id]) : '' ?></td>
                                <td class="actions">
                    <?php
                    echo $this->Html->link( '<i class="fa fa-eye"></i> ' . __('View'),
                    ['action' => 'view', $groupsUser->id],
                    ['class' => 'btn btn-default btn-xs', 'escape' => false]);
                    echo '&nbsp;';
                    echo $this->Html->link( '<i class="fa fa-pencil"></i> ' . __('Edit'),
                    ['action' => 'edit', $groupsUser->id],
                    ['class' => 'btn btn-default btn-xs', 'escape' => false]);
                    echo '&nbsp;';
                    echo $this->Form->postLink( '<i class="fa fa-times"></i> ' . __('Delete'),
                    ['action' => 'delete', $groupsUser->id],
                    ['class' => 'btn btn-default btn-xs', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $groupsUser->id)]);
                    ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
