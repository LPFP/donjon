

<nav class="well well-small">
    <?= $this->Html->link(__('Edit Calendar'), ['action' => 'edit', $calendar->id], ['class' => 'btn']) ?> </li>
<?php echo $this->Form->postLink(__('Delete Calendar'), ['action' => 'delete', $calendar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calendar->id)]) ?> 
<?php echo $this->Html->link(__('List Calendars'), ['action' => 'index']) ?> 
<?php echo $this->Html->link(__('New Calendar'), ['action' => 'add']) ?> 
<li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
</ul>
</nav>
<div class=" row calendars view large-9 medium-8 columns content">
    <div class="col-12">
        <h3><?= h($calendar->name) ?></h3>
        <table class="vertical-table">
            <tr>
                <th><?= __('Name') ?></th>
                <td><?= h($calendar->name) ?></td>
            </tr>
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($calendar->id) ?></td>
            </tr>
            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($calendar->created) ?></td>
            </tr>
            <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($calendar->modified) ?></td>
            </tr>
        </table>
        <div class="related">
            <h4><?= __('Related Events') ?></h4>
            <?php if (!empty($calendar->events)): ?>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('Title') ?></th>
                        <th><?= __('Content') ?></th>
                        <th><?= __('Begin') ?></th>
                        <th><?= __('End') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Modified') ?></th>
                        <th><?= __('Calendar Id') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($calendar->events as $events): ?>
                        <tr>
                            <td><?= h($events->id) ?></td>
                            <td><?= h($events->title) ?></td>
                            <td><?= h($events->content) ?></td>
                            <td><?= h($events->begin) ?></td>
                            <td><?= h($events->end) ?></td>
                            <td><?= h($events->created) ?></td>
                            <td><?= h($events->modified) ?></td>
                            <td><?= h($events->calendar_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Are you sure you want to delete # {0}?', $events->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>

    </div>
</div>