<nav class="well well-small">
    <?= $this->Html->link(__('Edit Offer'), ['action' => 'edit', $offer->id], ['class' => 'btn']) ?> </li>
<?php echo $this->Form->postLink(__('Delete Offer'), ['action' => 'delete', $offer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offer->id)]) ?> 
<?php echo $this->Html->link(__('List Offers'), ['action' => 'index']) ?> 
<?php echo $this->Html->link(__('New Offer'), ['action' => 'add']) ?> 
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
</nav>
<div class=" row offers view large-9 medium-8 columns content">
    <div class="col-12">
        <h3><?= h($offer->id) ?></h3>
        <table class="vertical-table">
                                                <tr>
                <th><?= __('User') ?></th>
                <td><?= $offer->has('user') ? $this->Html->link($offer->user->id, ['controller' => 'Users', 'action' => 'view', $offer->user->id]) : '' ?></td>
            </tr>
                                                                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($offer->id) ?></td>
            </tr>
                        <tr>
                <th><?= __('Units') ?></th>
                <td><?= $this->Number->format($offer->units) ?></td>
            </tr>
                        <tr>
                <th><?= __('Status') ?></th>
                <td><?= $this->Number->format($offer->status) ?></td>
            </tr>
                                                            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($offer->created) ?></td>
            </tr>
                        <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($offer->modified) ?></td>
            </tr>
                                                            <tr>
                <th><?= __('Offering Seeking') ?></th>
                <td><?= $offer->offering_seeking ? __('Yes') : __('No'); ?></td>
            </tr>
                                </table>
                        <div class="row">
            <h4><?= __('Description') ?></h4>
            <?= $this->Text->autoParagraph(h($offer->description)); ?>
        </div>
                            </div>
</div>