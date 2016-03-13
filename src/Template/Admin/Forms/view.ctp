<nav class="well well-small">
    <?= $this->Html->link(__('Edit Form'), ['action' => 'edit', $form->id], ['class' => 'btn']) ?> </li>
<?php echo $this->Form->postLink(__('Delete Form'), ['action' => 'delete', $form->id], ['confirm' => __('Are you sure you want to delete # {0}?', $form->id)]) ?> 
<?php echo $this->Html->link(__('List Forms'), ['action' => 'index']) ?> 
<?php echo $this->Html->link(__('New Form'), ['action' => 'add']) ?> 
</ul>
</nav>
<div class=" row forms view large-9 medium-8 columns content">
    <div class="col-12">
        <h3><?= h($form->id) ?></h3>
        <table class="vertical-table">
                                                <tr>
                <th><?= __('Type') ?></th>
                <td><?= h($form->type) ?></td>
            </tr>
                                                                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($form->id) ?></td>
            </tr>
                        <tr>
                <th><?= __('Status') ?></th>
                <td><?= $this->Number->format($form->status) ?></td>
            </tr>
                                                            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($form->created) ?></td>
            </tr>
                        <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($form->modified) ?></td>
            </tr>
                                            </table>
                        <div class="row">
            <h4><?= __('Values') ?></h4>
            <?= $this->Text->autoParagraph(h($form->values)); ?>
        </div>
                            </div>
</div>