<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class FullCalendarParametersForm extends Form {

    protected function _buildSchema(Schema $schema) {
        $fields = $schema
        ->addField('parametersBackgroundColor', 'string')
        ->addField('parametersTextColor', 'string')
        ->addField('parametersColor', 'string')
        ;
        return $fields;
    }

    protected function _buildValidator(Validator $validator) {
        $validator
        ->provider('ColorValidator', 'App\Validator\ColorValidator');
        #
        return

        $validator
        ->add('parametersBackgroundColor', 'cssValidColorRule', [
            'rule'     => 'isColor',
            'provider' => 'ColorValidator'
        ])
        ->add('parametersColor', 'cssValidColorRule', [
            'rule'     => 'isColor',
            'provider' => 'ColorValidator'
        ])
        ->add('parametersTextColor', 'cssValidColorRule', [
            'rule'     => 'isColor',
            'provider' => 'ColorValidator'
        ])
        ->requirePresence('parametersBackgroundColor')
        ->requirePresence('parametersTextColor')
        ->requirePresence('parametersColor')
        ;
    }

    protected function _execute(array $data) {
        // Envoie un email par ex.
        return true;
    }

}
