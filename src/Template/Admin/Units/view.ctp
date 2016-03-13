<nav class="well well-small">
    <?= $this->Html->link(__('Edit Unit'), ['action' => 'edit', $unit->id], ['class' => 'btn']) ?> </li>
<?php echo $this->Form->postLink(__('Delete Unit'), ['action' => 'delete', $unit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unit->id)]) ?> 
<?php echo $this->Html->link(__('List Units'), ['action' => 'index']) ?> 
<?php echo $this->Html->link(__('New Unit'), ['action' => 'add']) ?> 
<li><?= $this->Html->link(__('List Objects'), ['controller' => 'Objects', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Object'), ['controller' => 'Objects', 'action' => 'add']) ?> </li>
</ul>
</nav>
<div class=" row units view large-9 medium-8 columns content">
    <div class="col-12">
        <h3><?= h($unit->id) ?></h3>
        <table class="vertical-table">
                                                <tr>
                <th><?= __('Object') ?></th>
                <td><?= $unit->has('object') ? $this->Html->link($unit->object->name, ['controller' => 'Objects', 'action' => 'view', $unit->object->id]) : '' ?></td>
            </tr>
                                                <tr>
                <th><?= __('Uuid') ?></th>
                <td><?= h($unit->uuid) ?></td>
            </tr>
                                                                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($unit->id) ?></td>
            </tr>
                        <tr>
                <th><?= __('Status') ?></th>
                <td><?= $this->Number->format($unit->status) ?></td>
            </tr>
                                                            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($unit->created) ?></td>
            </tr>
                        <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($unit->modified) ?></td>
            </tr>
                                            </table>
                        <div class="row">
            <h4><?= __('Infos') ?></h4>
            <?= $this->Text->autoParagraph(h($unit->infos)); ?>
        </div>
                            </div>
</div>