<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Offer Entity.
 *
 * @property int $id
 * @property bool $offering_seeking
 * @property string $description
 * @property int $units
 * @property int $status
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 */
class Offer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
