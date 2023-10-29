<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Rendezvous Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $date
 * @property \Cake\I18n\FrozenTime $datedebut
 * @property \Cake\I18n\FrozenTime $datefin
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Rendezvous extends Entity
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
        'date' => true,
        'datedebut' => true,
        'datefin' => true,
        'user_id' => true,

         'docteur_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
