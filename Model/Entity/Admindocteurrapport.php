<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Admindocteurrapport Entity
 *
 * @property int $id
 * @property string $objet
 * @property string $rapport
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Admindocteurrapport extends Entity
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
        'objet' => true,
        'rapport' => true,
        'admin_id' => true,
        'docteur_id' => true,
        'created' => true,
        'modified' => true
    ];
}
