<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Keys'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="keys form large-9 medium-8 columns content">
    <?= $this->Form->create($key) ?>
    <fieldset>
        <legend><?= __('Add Key') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
