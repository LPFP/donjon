<div class="events row-fluid">
    <h3><?= __('Events') ?></h3>
    <hr/>
    <nav class="well well-small" id="">
        <?php
        echo $this->Html->link('<i class="fa fa-list"></i> ' . __('Calendars'), ['controller' => 'Calendars', 'action' => 'index'], ['escape' => false, 'class' => 'btn btn-default btn-sm']);
        echo '&nbsp;';
        echo $this->Html->link(__('New Calendar'), ['controller' => 'Calendars', 'action' => 'edit'], ['escape' => false, 'class' => 'btn btn-default btn-sm']);
        echo '&nbsp;';
        ?>
        </ul>
    </nav>



    <table cellpadding="0" cellspacing="0" class="table table condensed table-hover table-responsive table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('start') ?></th>
                <th><?= $this->Paginator->sort('end') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('calendar_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
                <tr>
                    <td><?= $this->Number->format($event->id) ?></td>
                    <td><?= h($event->title) ?></td>
                    <td><?= h($event->start) ?></td>
                    <td><?= h($event->end) ?></td>
                    <td><?= h($event->created) ?></td>
                    <td><?= h($event->modified) ?></td>
                    <td><?= $event->has('calendar') ? $this->Html->link($event->calendar->name, ['controller' => 'Calendars', 'action' => 'edit', $event->calendar->id]) : '' ?></td>
                    <td class="actions">
                        <?php
                        echo $this->Html->link('<i class="fa fa-eye"></i> ' . __('View'), ['action' => 'view', $event->id], ['class' => 'btn btn-default btn-xs', 'escape' => false]);
                        echo '&nbsp;';
                        echo $this->Form->postLink('<i class="fa fa-times"></i> ' . __('Delete'), ['action' => 'delete', $event->id], [
                            'class'   => 'btn btn-danger btn-xs',
                            'escape'  => false,
                            'confirm' => __('Are you sure you want to delete event "{0}" ?', $event->title)]);
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
