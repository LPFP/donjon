<?php

namespace App\Model\Table;

use App\Model\Entity\Calendar;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Database\Schema\Table as Schema;

/**
 * Calendars Model
 *
 * @property \Cake\ORM\Association\HasMany $Events
 */
class CalendarsTable extends Table {

    protected function _initializeSchema(Schema $schema) {
        $schema->columnType('parameters', 'json');
        return $schema;
    }

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('calendars');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Events', [
            'foreignKey' => 'calendar_id'
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
        ->requirePresence('name', 'create')
        ->notEmpty('name');

        return $validator;
    }

}
