<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Calendar Entity.
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Event[] $events
 */
class Calendar extends Entity {

    protected $_accessible = [
        '*'  => true,
        'id' => false,
    ];

}
