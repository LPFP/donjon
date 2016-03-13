<nav class="well well-small">
    <?= $this->Html->link(__('Edit Object'), ['action' => 'edit', $object->id], ['class' => 'btn']) ?> </li>
<?php echo $this->Form->postLink(__('Delete Object'), ['action' => 'delete', $object->id], ['confirm' => __('Are you sure you want to delete # {0}?', $object->id)]) ?> 
<?php echo $this->Html->link(__('List Objects'), ['action' => 'index']) ?> 
<?php echo $this->Html->link(__('New Object'), ['action' => 'add']) ?> 
<li><?= $this->Html->link(__('List Inventories'), ['controller' => 'Inventories', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Inventory'), ['controller' => 'Inventories', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Units'), ['controller' => 'Units', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Unit'), ['controller' => 'Units', 'action' => 'add']) ?> </li>
</ul>
</nav>
<div class=" row objects view large-9 medium-8 columns content">
    <div class="col-12">
        <h3><?= h($object->name) ?></h3>
        <table class="vertical-table">
                                                <tr>
                <th><?= __('Name') ?></th>
                <td><?= h($object->name) ?></td>
            </tr>
                                                <tr>
                <th><?= __('Inventory') ?></th>
                <td><?= $object->has('inventory') ? $this->Html->link($object->inventory->name, ['controller' => 'Inventories', 'action' => 'view', $object->inventory->id]) : '' ?></td>
            </tr>
                                                                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($object->id) ?></td>
            </tr>
                                                            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($object->created) ?></td>
            </tr>
                        <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($object->modified) ?></td>
            </tr>
                                            </table>
                        <div class="related">
            <h4><?= __('Related Units') ?></h4>
            <?php if (!empty($object->units)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                                        <th><?= __('Id') ?></th>
                                        <th><?= __('Infos') ?></th>
                                        <th><?= __('Status') ?></th>
                                        <th><?= __('Created') ?></th>
                                        <th><?= __('Modified') ?></th>
                                        <th><?= __('Object Id') ?></th>
                                        <th><?= __('Uuid') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($object->units as $units): ?>
                <tr>
                    <td><?= h($units->id) ?></td>
                    <td><?= h($units->infos) ?></td>
                    <td><?= h($units->status) ?></td>
                    <td><?= h($units->created) ?></td>
                    <td><?= h($units->modified) ?></td>
                    <td><?= h($units->object_id) ?></td>
                    <td><?= h($units->uuid) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Units', 'action' => 'view', $units->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Units', 'action' => 'edit', $units->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Units', 'action' => 'delete', $units->id], ['confirm' => __('Are you sure you want to delete # {0}?', $units->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>

            </div>
</div>