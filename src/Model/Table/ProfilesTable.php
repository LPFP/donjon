<?php

namespace App\Model\Table;

use App\Model\Entity\Profile;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use App\Lib\ProfferConfigurator;

/**
 * Profiles Model
 *
 * @property \Cake\ORM\Association\HasMany $Users
 */
class ProfilesTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('profiles');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Users', [
            'foreignKey' => 'profile_id'
        ]);
        $this->addBehavior('Proffer.Proffer', [
            'avatar' => [
                'root'            => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir'             => 'avatar_dir', // The name of the field to store the folder
                'thumbnailSizes'  => [
                    'square'       => [
                        'w'                     => 200,
                        'h'                     => 200,
                        'crop'                  => true,
                        'jpeg_quality'          => 100,
                        'png_compression_level' => 9
                    ],
                    'littleSquare' => [
                        'w'                     => 100,
                        'h'                     => 100,
                        'crop'                  => true,
                        'jpeg_quality'          => 100,
                        'png_compression_level' => 9
                    ],
                ],
                'thumbnailMethod' => 'Gd'  // Options are Imagick, Gd or Gmagick
            ]
        ]
        );
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

        $validator
        ->requirePresence('firstname', 'create')
        ->notEmpty('firstname');

        $validator
        ->requirePresence('biography', 'create')
        ->notEmpty('biography');

        return $validator;
    }

}
