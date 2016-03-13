<% 
use Cake\Utility\Inflector;

$fields = collection($fields)
->filter(function($field) use ($schema) {
return $schema->columnType($field) !== 'binary';
});

if (isset($modelObject) && $modelObject->behaviors()->has('Tree')) {
$fields = $fields->reject(function ($field) {
return $field === 'lft' || $field === 'rght';
});
}
%>
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
            <% if (strpos($action, 'add') === false): %>
            <?php
            echo $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $<%= $singularVar %>-><%= $primaryKey[0] %>],
            ['class' => 'pull-right btn btn-sm btn-danger'],
            ['confirm' => __('Are you sure you want to delete # {0}?', $<%= $singularVar %>-><%= $primaryKey[0] %>)]
            )
            ?>
            <% endif; %>
            <?= $this->Html->link(__('List <%= $pluralHumanName %>'), ['action' => 'index'], ['class' => 'btn btn-sm btn-default']) ?>
            <%
            $done = [];
            foreach ($associations as $type => $data) {
            foreach ($data as $alias => $details) {
            if ($details['controller'] !== $this->name && !in_array($details['controller'], $done)) {
            %>
            <?php
            echo
            $this->Html->link(__('List <%= $this->_pluralHumanName($alias) %>'), [
            'controller' => '<%= $details['controller'] %>',
            'action' => 'index'], ['class' => 'btn btn-sm btn-default']);
            ?>
            <?php
            echo
            $this->Html->link(__('New <%= $this->_singularHumanName($alias) %>'), [
            'controller' => '<%= $details['controller'] %>',
            'action' => 'add'], [
            'class' => 'btn btn-sm btn-default'
            ])
            ?>
            <%
            $done[] = $details['controller'];
            }
            }
            }
            %>
        </div>
    </div>
</div>

<div class="row">
    <div class="span12">
        <div class="<%= $pluralVar %>">
            <?php echo $this->Form->create($<%= $singularVar %> , ['form-horizontal']) ?>
            <fieldset>
                <legend><?php __('<%= Inflector::humanize($action) %> <%= $singularHumanName %>') ?></legend>
                <?php
                <%
                foreach ($fields as $field) :
                    if (in_array($field, $primaryKey)) :
                        continue;
                    endif;
                    #
                    if (isset($keyFields[$field])) :
                        $fieldData = $schema->column($field);
                        if (!empty($fieldData['null'])) :
                            %>
                            echo $this->Form->label('<%= $field %>');
                            echo $this->Form->input('<%= $field %>', array_merge($opt, ['options' => $<%= $keyFields[$field] %>, 'empty' => true]));
                        <%
                        else :
                            %>
                            echo $this->Form->label('<%= $field %>');
                            echo $this->Form->input('<%= $field %>', array_merge($opt, ['options' => $<%= $keyFields[$field] %>]));
                        <%
                        endif;
                        continue;
                    endif;
                    # 
                    if (!in_array($field, ['created', 'modified', 'updated'])) :
                        $fieldData = $schema->column($field);
                        if (in_array($fieldData['type'], ['date', 'datetime', 'time']) && (!empty($fieldData['null']))) :
                            %>
                            echo $this->Form->label('<%= $field %>');
                            echo $this->Form->input('<%= $field %>', array_merge($opt, ['empty' => true]));
                        <%
                        else :
                            %>
                            echo $this->Form->label('<%= $field %>');
                            echo $this->Form->input('<%= $field %>', array_merge($opt, ['placeholder' => ""]));
                        <%
                        endif;
                    endif;


                endforeach;
                #
                if (!empty($associations['BelongsToMany'])) :
                    foreach ($associations['BelongsToMany'] as $assocName => $assocData) :
                        %>
            echo $this->Form->input('<%= $assocData['property'] %>._ids', ['options' => $<%= $assocData['variable'] %>]);
                        <%
                    endforeach;
                endif;
                %>
                
                
                
                
                
                
                
                
                
                
                
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