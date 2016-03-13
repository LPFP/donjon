<nav class="well well-small">
    <?= $this->Html->link(__('Edit Inventory'), ['action' => 'edit', $inventory->id], ['class' => 'btn']) ?> </li>
<?php echo $this->Form->postLink(__('Delete Inventory'), ['action' => 'delete', $inventory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->id)]) ?> 
<?php echo $this->Html->link(__('List Inventories'), ['action' => 'index']) ?> 
<?php echo $this->Html->link(__('New Inventory'), ['action' => 'add']) ?> 
<li><?= $this->Html->link(__('List Objects'), ['controller' => 'Objects', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Object'), ['controller' => 'Objects', 'action' => 'add']) ?> </li>
</ul>
</nav>
<div class=" row inventories view large-9 medium-8 columns content">
    <div class="col-12">
        <h3><?= h($inventory->name) ?></h3>
        <table class="vertical-table">
                                                <tr>
                <th><?= __('Name') ?></th>
                <td><?= h($inventory->name) ?></td>
            </tr>
                                                                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($inventory->id) ?></td>
            </tr>
                                                            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($inventory->created) ?></td>
            </tr>
                        <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($inventory->modified) ?></td>
            </tr>
                                            </table>
                        <div class="row">
            <h4><?= __('Description') ?></h4>
            <?= $this->Text->autoParagraph(h($inventory->description)); ?>
        </div>
                                <div class="related">
            <h4><?= __('Related Objects') ?></h4>
            <?php if (!empty($inventory->objects)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                                        <th><?= __('Id') ?></th>
                                        <th><?= __('Name') ?></th>
                                        <th><?= __('Created') ?></th>
                                        <th><?= __('Modified') ?></th>
                                        <th><?= __('Inventory Id') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($inventory->objects as $objects): ?>
                <tr>
                    <td><?= h($objects->id) ?></td>
                    <td><?= h($objects->name) ?></td>
                    <td><?= h($objects->created) ?></td>
                    <td><?= h($objects->modified) ?></td>
                    <td><?= h($objects->inventory_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Objects', 'action' => 'view', $objects->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Objects', 'action' => 'edit', $objects->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Objects', 'action' => 'delete', $objects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $objects->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>

            </div>
</div>