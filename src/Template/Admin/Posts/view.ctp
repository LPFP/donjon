<nav class="well well-small">
    <?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id], ['class' => 'btn']) ?> </li>
<?php echo $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> 
<?php echo $this->Html->link(__('List Posts'), ['action' => 'index']) ?> 
<?php echo $this->Html->link(__('New Post'), ['action' => 'add']) ?> 
</ul>
</nav>
<div class=" row posts view large-9 medium-8 columns content">
    <div class="col-12">
        <h3><?= h($post->title) ?></h3>
        <table class="vertical-table">
                                                <tr>
                <th><?= __('Title') ?></th>
                <td><?= h($post->title) ?></td>
            </tr>
                                                <tr>
                <th><?= __('Route') ?></th>
                <td><?= h($post->route) ?></td>
            </tr>
                                                <tr>
                <th><?= __('Slug') ?></th>
                <td><?= h($post->slug) ?></td>
            </tr>
                                                                                    <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($post->id) ?></td>
            </tr>
                                                            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($post->created) ?></td>
            </tr>
                        <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($post->modified) ?></td>
            </tr>
                                            </table>
                        <div class="row">
            <h4><?= __('Content') ?></h4>
            <?= $this->Text->autoParagraph(h($post->content)); ?>
        </div>
                <div class="row">
            <h4><?= __('Settings') ?></h4>
            <?= $this->Text->autoParagraph(h($post->settings)); ?>
        </div>
                            </div>
</div>