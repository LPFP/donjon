<%
use Cake\Utility\Inflector;

$fields = collection($fields)
->filter(function($field) use ($schema) {
return !in_array($schema->columnType($field), ['binary', 'text']);
})
->take(7);

if (isset($modelObject) && $modelObject->behaviors()->has('Tree')) {
$fields = $fields->reject(function ($field) {
return $field === 'lft' || $field === 'rght';
});
}
%>
<div class="<%= $pluralVar %> row-fluid">
    <h3><?= __('<%= $pluralHumanName %>') ?></h3>
    <hr/>
    <nav class="well well-small" id="">
        <?php
        echo $this->Html->link('<i class="fa fa-plus"></i> ' . __('New <%= $singularHumanName %>'), ['action' => 'add'], ['class' => 'btn btn-default btn-sm', 'escape' => false]);
        echo '&nbsp;';
        ?>
        <%
        $done = [];
        foreach ($associations as $type => $data):
        foreach ($data as $alias => $details):
        if (!empty($details['navLink']) && $details['controller'] !== $this->name && !in_array($details['controller'], $done)):
        %>
        <?php
        echo $this->Html->link('<i class="fa fa-list"></i> ' . __('List <%= $this->_pluralHumanName($alias) %>'), ['controller' => '<%= $details['controller'] %>', 'action' => 'index'], ['escape' => false, 'class' => 'btn btn-default btn-sm']);
        echo '&nbsp;';
        echo $this->Html->link(__('New <%= $this->_singularHumanName($alias) %>'), ['controller' => '<%= $details['controller'] %>', 'action' => 'add'], ['escape' => false, 'class' => 'btn btn-default btn-sm']);
        echo '&nbsp;';
        ?>
        <%
        $done[] = $details['controller'];
        endif;
        endforeach;
        endforeach;
        %>
        </ul>
    </nav>


    <table cellpadding="0" cellspacing="0" class="table table condensed table-hover table-responsive table-striped">
        <thead>
            <tr>
                <% foreach ($fields as $field): %>
                <th><?= $this->Paginator->sort('<%= $field %>') ?></th>
                <% endforeach; %>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($<%= $pluralVar %> as $<%= $singularVar %>): ?>
            <tr>
                <%        foreach ($fields as $field) {
                $isKey = false;
                if (!empty($associations['BelongsTo'])) {
                foreach ($associations['BelongsTo'] as $alias => $details) {
                if ($field === $details['foreignKey']) {
                $isKey = true;
                %>
                <td><?= $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?></td>
                <%
                break;
                }
                }
                }
                if ($isKey !== true) {
                if (!in_array($schema->columnType($field), ['integer', 'biginteger', 'decimal', 'float'])) {
                %>
                <td><?= h($<%= $singularVar %>-><%= $field %>) ?></td>
                <%
                } else {
                %>
                <td><?= $this->Number->format($<%= $singularVar %>-><%= $field %>) ?></td>
                <%
                }
                }
                }

                $pk = '$' . $singularVar . '->' . $primaryKey[0];
                %>
                <td class="actions">
                    <?php
                    echo $this->Html->link( '<i class="fa fa-eye"></i> ' . __('View'),
                    ['action' => 'view', <%= $pk %>],
                    ['class' => 'btn btn-default btn-xs', 'escape' => false]);
                    echo '&nbsp;';
                    echo $this->Html->link( '<i class="fa fa-pencil"></i> ' . __('Edit'),
                    ['action' => 'edit', <%= $pk %>],
                    ['class' => 'btn btn-default btn-xs', 'escape' => false]);
                    echo '&nbsp;';
                    echo $this->Form->postLink( '<i class="fa fa-times"></i> ' . __('Delete'),
                    ['action' => 'delete', <%= $pk %>],
                    ['class' => 'btn btn-default btn-xs', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', <%= $pk %>)]);
                    ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
