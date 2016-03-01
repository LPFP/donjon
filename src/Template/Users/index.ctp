<div class="users row-fluid">
    <h3><?= __('Users') ?></h3>
    <hr/>
    <nav class="well well-small" id="">
        <?php
        echo $this->Html->link('<i class="fa fa-plus"></i> ' . __('New User'), ['action' => 'add'], ['class' => 'btn btn-default btn-sm', 'escape' => false]);
        echo '&nbsp;';
        ?>
                <?php
        echo $this->Html->link('<i class="fa fa-list"></i> ' . __('List Key Borrows'), ['controller' => 'KeyBorrows', 'action' => 'index'], ['escape' => false, 'class' => 'btn btn-default btn-sm']);
        echo '&nbsp;';
        echo $this->Html->link(__('New Key Borrow'), ['controller' => 'KeyBorrows', 'action' => 'add'], ['escape' => false, 'class' => 'btn btn-default btn-sm']);
        echo '&nbsp;';
        ?>
                </ul>
    </nav>


    <table cellpadding="0" cellspacing="0" class="table table condensed table-hover table-responsive table-striped">
        <thead>
            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('firstname') ?></th>
                                <th><?= $this->Paginator->sort('name') ?></th>
                                <th><?= $this->Paginator->sort('email') ?></th>
                                <th><?= $this->Paginator->sort('became_member_date') ?></th>
                                <th><?= $this->Paginator->sort('type') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                                <td><?= $this->Number->format($user->id) ?></td>
                                <td><?= h($user->firstname) ?></td>
                                <td><?= h($user->name) ?></td>
                                <td><?= h($user->email) ?></td>
                                <td><?= h($user->became_member_date) ?></td>
                                <td><?= $this->Number->format($user->type) ?></td>
                                <td><?= h($user->created) ?></td>
                                <td class="actions">
                    <?php
                    echo $this->Html->link( '<i class="fa fa-eye"></i> ' . __('View'),
                    ['action' => 'view', $user->id],
                    ['class' => 'btn btn-default btn-xs', 'escape' => false]);
                    echo '&nbsp;';
                    echo $this->Html->link( '<i class="fa fa-pencil"></i> ' . __('Edit'),
                    ['action' => 'edit', $user->id],
                    ['class' => 'btn btn-default btn-xs', 'escape' => false]);
                    echo '&nbsp;';
                    echo $this->Form->postLink( '<i class="fa fa-times"></i> ' . __('Delete'),
                    ['action' => 'delete', $user->id],
                    ['class' => 'btn btn-default btn-xs', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]);
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
