<div class="reports row-fluid">
    <h3><?= __('Reports') ?></h3>
    <hr/>
    <nav class="well well-small" id="">
        <?php
        echo $this->Html->link('<i class="fa fa-plus"></i> ' . __('New Report'), ['action' => 'add'], ['class' => 'btn btn-default btn-sm', 'escape' => false]);
        echo '&nbsp;';
        ?>
                </ul>
    </nav>


    <table cellpadding="0" cellspacing="0" class="table table condensed table-hover table-responsive table-striped">
        <thead>
            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('type') ?></th>
                                <th><?= $this->Paginator->sort('status') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reports as $report): ?>
            <tr>
                                <td><?= $this->Number->format($report->id) ?></td>
                                <td><?= $this->Number->format($report->type) ?></td>
                                <td><?= $this->Number->format($report->status) ?></td>
                                <td><?= h($report->created) ?></td>
                                <td><?= h($report->modified) ?></td>
                                <td class="actions">
                    <?php
                    echo $this->Html->link( '<i class="fa fa-eye"></i> ' . __('View'),
                    ['action' => 'view', $report->id],
                    ['class' => 'btn btn-default btn-xs', 'escape' => false]);
                    echo '&nbsp;';
                    echo $this->Html->link( '<i class="fa fa-pencil"></i> ' . __('Edit'),
                    ['action' => 'edit', $report->id],
                    ['class' => 'btn btn-default btn-xs', 'escape' => false]);
                    echo '&nbsp;';
                    echo $this->Form->postLink( '<i class="fa fa-times"></i> ' . __('Delete'),
                    ['action' => 'delete', $report->id],
                    ['class' => 'btn btn-default btn-xs', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $report->id)]);
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
