<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Key'), ['action' => 'edit', $key->id], ['class' => 'btn']) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Key'), ['action' => 'delete', $key->id], ['confirm' => __('Are you sure you want to delete # {0}?', $key->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Keys'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Key'), ['action' => 'add']) ?> </li>
            </ul>
</nav>
<div class="keys view large-9 medium-8 columns content">
    <h3><?= h($key->name) ?></h3>
    <table class="vertical-table">
                                <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($key->name) ?></td>
        </tr>
                                                        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($key->id) ?></td>
        </tr>
                                        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($key->created) ?></td>
        </tr>
                <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($key->modified) ?></td>
        </tr>
                            </table>
        </div>
