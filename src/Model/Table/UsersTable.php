<?php

namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Profiles
 * @property \Cake\ORM\Association\HasMany $KeyBorrows
 * @property \Cake\ORM\Association\HasMany $Offers
 * @property \Cake\ORM\Association\BelongsToMany $Groups
 */
class UsersTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Profiles', [
            'foreignKey' => 'profile_id',
            'joinType'   => 'INNER'
        ]);
        $this->hasMany('KeyBorrows', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Offers', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsToMany('Groups', [
            'foreignKey'       => 'user_id',
            'targetForeignKey' => 'group_id',
            'joinTable'        => 'groups_users'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
        ->integer('id')
        ->allowEmpty('id', 'create');

        $validator
        ->email('email')
        ->requirePresence('email', 'create')
        ->notEmpty('email');

        $validator
        ->requirePresence('password', 'create')
        ->notEmpty('password');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['profile_id'], 'Profiles'));
        return $rules;
    }

}
