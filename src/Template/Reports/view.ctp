<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Report'), ['action' => 'edit', $report->id], ['class' => 'btn']) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Report'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report'), ['action' => 'add']) ?> </li>
            </ul>
</nav>
<div class="reports view large-9 medium-8 columns content">
    <h3><?= h($report->id) ?></h3>
    <table class="vertical-table">
                                        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($report->id) ?></td>
        </tr>
                <tr>
            <th><?= __('Type') ?></th>
            <td><?= $this->Number->format($report->type) ?></td>
        </tr>
                <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($report->status) ?></td>
        </tr>
                                        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($report->created) ?></td>
        </tr>
                <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($report->modified) ?></td>
        </tr>
                            </table>
            <div class="row">
        <h4><?= __('Summary') ?></h4>
        <?= $this->Text->autoParagraph(h($report->summary)); ?>
    </div>
            </div>
