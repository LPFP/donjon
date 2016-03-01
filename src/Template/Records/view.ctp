<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Record'), ['action' => 'edit', $record->id], ['class' => 'btn']) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Record'), ['action' => 'delete', $record->id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Records'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Record'), ['action' => 'add']) ?> </li>
            </ul>
</nav>
<div class="records view large-9 medium-8 columns content">
    <h3><?= h($record->id) ?></h3>
    <table class="vertical-table">
                                        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($record->id) ?></td>
        </tr>
                <tr>
            <th><?= __('Type') ?></th>
            <td><?= $this->Number->format($record->type) ?></td>
        </tr>
                <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($record->status) ?></td>
        </tr>
                                        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($record->created) ?></td>
        </tr>
                <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($record->modified) ?></td>
        </tr>
                            </table>
            <div class="row">
        <h4><?= __('Summary') ?></h4>
        <?= $this->Text->autoParagraph(h($record->summary)); ?>
    </div>
            </div>
