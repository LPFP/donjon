<nav class="well well-small">
    <?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id], ['class' => 'btn']) ?> </li>
<?php echo $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> 
<?php echo $this->Html->link(__('List Events'), ['action' => 'index']) ?> 
<?php echo $this->Html->link(__('New Event'), ['action' => 'add']) ?> 
<li><?= $this->Html->link(__('List Calendars'), ['controller' => 'Calendars', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Calendar'), ['controller' => 'Calendars', 'action' => 'add']) ?> </li>
</ul>
</nav>
<div class=" row events view large-9 medium-8 columns content">
    <div class="col-12">
        <h3><?= h($event->title) ?></h3>
        <table class="vertical-table">
                                                <tr>
                <th><?= __('Title') ?></th>
                <td><?= h($event->title) ?></td>
            </tr>
                                                <tr>
                <th><?= __('Calendar') ?></th>
                <td><?= $event->has('calendar') ? $this->Html->link($event->calendar->name, ['controller' => 'Calendars', 'action' => 'view', $event->calendar->id]) : '' ?></td>
            </tr>
                                                                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($event->id) ?></td>
            </tr>
                                                            <tr>
                <th><?= __('Begin') ?></th>
                <td><?= h($event->begin) ?></td>
            </tr>
                        <tr>
                <th><?= __('End') ?></th>
                <td><?= h($event->end) ?></td>
            </tr>
                        <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($event->created) ?></td>
            </tr>
                        <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($event->modified) ?></td>
            </tr>
                                            </table>
                        <div class="row">
            <h4><?= __('Content') ?></h4>
            <?= $this->Text->autoParagraph(h($event->content)); ?>
        </div>
                            </div>
</div>