<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Member'), ['action' => 'edit', $member->id], ['class' => 'btn']) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Member'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['action' => 'add']) ?> </li>
            </ul>
</nav>
<div class="members view large-9 medium-8 columns content">
    <h3><?= h($member->name) ?></h3>
    <table class="vertical-table">
                                <tr>
            <th><?= __('Firstname') ?></th>
            <td><?= h($member->firstname) ?></td>
        </tr>
                                <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($member->name) ?></td>
        </tr>
                                                        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($member->id) ?></td>
        </tr>
                                        <tr>
            <th><?= __('Became Member Date') ?></th>
            <td><?= h($member->became_member_date) ?></td>
        </tr>
                <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($member->created) ?></td>
        </tr>
                <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($member->modified) ?></td>
        </tr>
                            </table>
            <div class="row">
        <h4><?= __('Infos') ?></h4>
        <?= $this->Text->autoParagraph(h($member->infos)); ?>
    </div>
            </div>
