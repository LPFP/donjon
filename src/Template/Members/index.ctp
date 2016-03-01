<div class="members row-fluid">
    <h3><?= __('Members') ?></h3>
    <hr/>
    <nav class="well well-small" id="">
        <?php
        echo $this->Html->link('<i class="fa fa-plus"></i> ' . __('New Member'), ['action' => 'add'], ['class' => 'btn btn-default btn-sm', 'escape' => false]);
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
                                <th><?= $this->Paginator->sort('became_member_date') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($members as $member): ?>
            <tr>
                                <td><?= $this->Number->format($member->id) ?></td>
                                <td><?= h($member->firstname) ?></td>
                                <td><?= h($member->name) ?></td>
                                <td><?= h($member->became_member_date) ?></td>
                                <td><?= h($member->created) ?></td>
                                <td><?= h($member->modified) ?></td>
                                <td class="actions">
                    <?php
                    echo $this->Html->link( '<i class="fa fa-eye"></i> ' . __('View'),
                    ['action' => 'view', $member->id],
                    ['class' => 'btn btn-default btn-xs', 'escape' => false]);
                    echo '&nbsp;';
                    echo $this->Html->link( '<i class="fa fa-pencil"></i> ' . __('Edit'),
                    ['action' => 'edit', $member->id],
                    ['class' => 'btn btn-default btn-xs', 'escape' => false]);
                    echo '&nbsp;';
                    echo $this->Form->postLink( '<i class="fa fa-times"></i> ' . __('Delete'),
                    ['action' => 'delete', $member->id],
                    ['class' => 'btn btn-default btn-xs', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $member->id)]);
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
