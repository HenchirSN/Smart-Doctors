<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Secretaireprofile Entity
 *
 * @property int $id
 * @property int $cin
 * @property string $datenaissnace
 * @property int $mobile
 * @property string $adresse
 * @property int $codepostal
 * @property string $situationfamiliale
 * @property int $docteur_id
 * @property \Cake\I18n\FrozenTime $created
 * @property int $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Secretaireprofile extends Entity
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

        'docteur_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
