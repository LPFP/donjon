<?php
$opt = [
    'label' => false,
];
$this->loadHelper('Form', [
    'templates' => 'BakeBootstrap3Crud.vertical',
]);
?>

<div class="row">
    <div class="span12">
        <div class="well well-small">
            <?php
            echo $this->Form->postLink(
            __('Delete'), ['action' => 'delete', $profile->id], ['class' => 'pull-right btn btn-sm btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]
            )
            ?>
            <?= $this->Html->link(__('List Profiles'), ['action' => 'index'], ['class' => 'btn btn-sm btn-default']) ?>
            <?php
            echo
            $this->Html->link(__('List Users'), [
                'controller' => 'Users',
                'action'     => 'index'], ['class' => 'btn btn-sm btn-default']);
            ?>
            <?php
            echo
            $this->Html->link(__('New User'), [
                'controller' => 'Users',
                'action'     => 'add'], [
                'class' => 'btn btn-sm btn-default'
            ])
            ?>
        </div>
    </div>
</div>
<?php
debug($profile);
?>
<div class = "row">
    <div class = "span12">
        <div class = "profiles">
            <?php echo $this->Form->create($profile, ['form-horizontal', 'type' => 'file'])
            ?>
            <fieldset>
                <legend><?php __('Edit Profile') ?></legend>
                <?php
                echo $this->Form->label('name');
                echo $this->Form->input('name', array_merge($opt, ['placeholder' => ""]));
                echo $this->Form->label('firstname');
                echo $this->Form->input('firstname', array_merge($opt, ['placeholder' => ""]));
                echo $this->Form->label('biography');
                echo $this->Form->input('biography', array_merge($opt, ['placeholder' => ""]));
                echo $this->Form->input('avatar', ['type' => 'file']);
                echo $this->Html->image("/files/profiles/avatar/{$profile->get('avatar_dir')}/littleSquare_{$profile->get('avatar')}");
                ?>
            </fieldset>
            <br/>
            <div class="well well-small">
                <?php echo $this->Form->button(__('Submit'), ['class' => 'pull-right btn btn-success']) ?>
                <div class="clearfix"></div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
·