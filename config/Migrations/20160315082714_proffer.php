<?php

use Phinx\Migration\AbstractMigration;

class Proffer extends AbstractMigration {

    public function up() {
        $table = $this->table('profiles');
        $table
        ->addColumn('avatar', 'string', [
            'default' => null,
            'limit'   => 255,
            'null'    => false,
        ])
        ->addColumn('avatar_dir', 'string', [
            'default' => null,
            'limit'   => 255,
            'null'    => false,
        ])
        ;
    }

    public function down() {
        $table = $this->table('profiles');
        $table
        ->removeColumn('avatar')
        ->removeColumn('avatar_dir')
        ;
    }

}
