<?php

use Migrations\AbstractMigration;

class Initial extends AbstractMigration {

    public $autoId = false;

    public function up() {
        $table = $this->table('calendars');
        $table
        ->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default'       => null,
            'limit'         => 11,
            'null'          => false,
        ])
        ->addPrimaryKey(['id'])
        ->addColumn('name', 'string', [
            'default' => null,
            'limit'   => 255,
            'null'    => false,
        ])
        ->addColumn('created', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('modified', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->create();

        $table = $this->table('events');
        $table
        ->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default'       => null,
            'limit'         => 11,
            'null'          => false,
        ])
        ->addPrimaryKey(['id'])
        ->addColumn('title', 'string', [
            'default' => null,
            'limit'   => 255,
            'null'    => false,
        ])
        ->addColumn('content', 'text', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('begin', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('end', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('created', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('modified', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('calendar_id', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ])
        ->create();

        $table = $this->table('forms');
        $table
        ->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default'       => null,
            'limit'         => 11,
            'null'          => false,
        ])
        ->addPrimaryKey(['id'])
        ->addColumn('type', 'string', [
            'default' => null,
            'limit'   => 255,
            'null'    => false,
        ])
        ->addColumn('values', 'text', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('status', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ])
        ->addColumn('created', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('modified', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->create();

        $table = $this->table('groups');
        $table
        ->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default'       => null,
            'limit'         => 11,
            'null'          => false,
        ])
        ->addPrimaryKey(['id'])
        ->addColumn('name', 'string', [
            'default' => null,
            'limit'   => 255,
            'null'    => false,
        ])
        ->addColumn('slug', 'string', [
            'default' => null,
            'limit'   => 255,
            'null'    => false,
        ])
        ->addColumn('created', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('modified', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addIndex(
        [
            'slug',
        ], ['unique' => true]
        )
        ->create();

        $table = $this->table('groups_users');
        $table
        ->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default'       => null,
            'limit'         => 11,
            'null'          => false,
        ])
        ->addPrimaryKey(['id'])
        ->addColumn('group_id', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ])
        ->addColumn('user_id', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ])
        ->create();

        $table = $this->table('inventories');
        $table
        ->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default'       => null,
            'limit'         => 11,
            'null'          => false,
        ])
        ->addPrimaryKey(['id'])
        ->addColumn('name', 'string', [
            'default' => null,
            'limit'   => 255,
            'null'    => false,
        ])
        ->addColumn('description', 'text', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('created', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('modified', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->create();

        $table = $this->table('key_borrows');
        $table
        ->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default'       => null,
            'limit'         => 11,
            'null'          => false,
        ])
        ->addPrimaryKey(['id'])
        ->addColumn('key_id', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ])
        ->addColumn('user_id', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ])
        ->addColumn('created', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->create();

        $table = $this->table('keys');
        $table
        ->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default'       => null,
            'limit'         => 10,
            'null'          => false,
            'signed'        => false,
        ])
        ->addPrimaryKey(['id'])
        ->addColumn('name', 'string', [
            'default' => null,
            'limit'   => 255,
            'null'    => false,
        ])
        ->addColumn('created', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('modified', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->create();

        $table = $this->table('objects');
        $table
        ->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default'       => null,
            'limit'         => 11,
            'null'          => false,
        ])
        ->addPrimaryKey(['id'])
        ->addColumn('name', 'string', [
            'default' => null,
            'limit'   => 255,
            'null'    => false,
        ])
        ->addColumn('created', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('modified', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('inventory_id', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => true,
        ])
        ->create();

        $table = $this->table('offers');
        $table
        ->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default'       => null,
            'limit'         => 11,
            'null'          => false,
        ])
        ->addPrimaryKey(['id'])
        ->addColumn('offering_seeking', 'boolean', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('description', 'text', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('units', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ])
        ->addColumn('status', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ])
        ->addColumn('created', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('modified', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('user_id', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ])
        ->create();

        $table = $this->table('profiles');
        $table
        ->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default'       => null,
            'limit'         => 11,
            'null'          => false,
        ])
        ->addPrimaryKey(['id'])
        ->addColumn('name', 'string', [
            'default' => null,
            'limit'   => 255,
            'null'    => false,
        ])
        ->addColumn('firstname', 'string', [
            'default' => null,
            'limit'   => 255,
            'null'    => false,
        ])
        ->addColumn('biography', 'text', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->create();

        $table = $this->table('reports');
        $table
        ->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default'       => null,
            'limit'         => 11,
            'null'          => false,
        ])
        ->addPrimaryKey(['id'])
        ->addColumn('report', 'text', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('type', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ])
        ->addColumn('status', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ])
        ->addColumn('created', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('modified', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addIndex(
        [
            'status',
        ]
        )
        ->addIndex(
        [
            'id',
        ]
        )
        ->create();

        $table = $this->table('transaction_types');
        $table
        ->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default'       => null,
            'limit'         => 11,
            'null'          => false,
        ])
        ->addPrimaryKey(['id'])
        ->addColumn('name', 'string', [
            'default' => null,
            'limit'   => 255,
            'null'    => false,
        ])
        ->addColumn('informations', 'text', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('created', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('modified', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->create();

        $table = $this->table('transactions');
        $table
        ->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default'       => null,
            'limit'         => 11,
            'null'          => false,
        ])
        ->addPrimaryKey(['id'])
        ->addColumn('amount', 'float', [
            'default' => null,
            'limit'   => null,
            'null'    => true,
        ])
        ->addColumn('description', 'text', [
            'default' => null,
            'limit'   => null,
            'null'    => true,
        ])
        ->addColumn('metas', 'text', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('is_income', 'boolean', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('created', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => true,
        ])
        ->addColumn('modified', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => true,
        ])
        ->addColumn('created_by', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ])
        ->addColumn('transaction_type_id', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ])
        ->addIndex(
        [
            'created_by',
        ]
        )
        ->addIndex(
        [
            'id',
        ]
        )
        ->addIndex(
        [
            'transaction_type_id',
        ]
        )
        ->create();

        $table = $this->table('units');
        $table
        ->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default'       => null,
            'limit'         => 11,
            'null'          => false,
        ])
        ->addPrimaryKey(['id'])
        ->addColumn('infos', 'text', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('status', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ])
        ->addColumn('created', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('modified', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('object_id', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ])
        ->addColumn('uuid', 'string', [
            'default' => null,
            'limit'   => 36,
            'null'    => false,
        ])
        ->create();

        $table = $this->table('users');
        $table
        ->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default'       => null,
            'limit'         => 11,
            'null'          => false,
        ])
        ->addPrimaryKey(['id'])
        ->addColumn('email', 'string', [
            'default' => null,
            'limit'   => 250,
            'null'    => false,
        ])
        ->addColumn('password', 'string', [
            'default' => null,
            'limit'   => 60,
            'null'    => false,
        ])
        ->addColumn('profile_id', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ])
        ->addColumn('created', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->addColumn('modified', 'datetime', [
            'default' => null,
            'limit'   => null,
            'null'    => false,
        ])
        ->create();

        $this->table('transactions')
        ->addForeignKey(
        'created_by', 'users', 'id', [
            'update' => 'NO_ACTION',
            'delete' => 'NO_ACTION'
        ]
        )
        ->update();
    }

    public function down() {
        $this->table('transactions')
        ->dropForeignKey(
        'created_by'
        );

        $this->dropTable('calendars');
        $this->dropTable('events');
        $this->dropTable('forms');
        $this->dropTable('groups');
        $this->dropTable('groups_users');
        $this->dropTable('inventories');
        $this->dropTable('key_borrows');
        $this->dropTable('keys');
        $this->dropTable('objects');
        $this->dropTable('offers');
        $this->dropTable('profiles');
        $this->dropTable('reports');
        $this->dropTable('transaction_types');
        $this->dropTable('transactions');
        $this->dropTable('units');
        $this->dropTable('users');
    }

}
