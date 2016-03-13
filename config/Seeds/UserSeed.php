<?php

use Phinx\Seed\AbstractSeed;

class UserSeed extends AbstractSeed {

    public function run() {
        $data = [
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }

}
