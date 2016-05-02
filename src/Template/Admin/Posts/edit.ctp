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
                    __('Delete'), ['action' => 'delete', $post->id], ['class' => 'pull-right btn btn-sm btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]
            )
            ?>
            <?= $this->Html->link(__('List Posts'), ['action' => 'index'], ['class' => 'btn btn-sm btn-default']) ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="span12">
        <div class="posts">
<?php echo $this->Form->create($post, ['form-horizontal']) ?>
            <fieldset>
                <legend><?php __('Add Post') ?></legend>
            <?php
            echo $this->Form->label('title');
            echo $this->Form->input('title', array_merge($opt, ['placeholder' => ""]));
            echo $this->Form->label('route');
            echo $this->Form->input('route', array_merge($opt, ['placeholder' => ""]));
            echo $this->Form->label('slug');
            echo $this->Form->input('slug', array_merge($opt, ['placeholder' => ""]));

            echo $this->Form->label('content');
            echo $this->Form->input('content', array_merge($opt, ['placeholder' => __("Main Page content")]));
            echo $this->CKEditor->replace('content', array_merge($opt, [
            ]));

            echo $this->Form->label('settings');
            echo $this->Form->input('settings.js', array_merge($opt, [
                'type' => 'textarea',
                'placeholder' => __("Additionnal Javascript")]));
            echo $this->Form->input('settings.styles', array_merge($opt, [
                'type' => 'textarea',
                'placeholder' => __("additonnal Css Styles")]));
            echo $this->Form->input('settings.metas', array_merge($opt, [
                'type' => 'textarea',
                'placeholder' => __("Additionnal metas tags")]));
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