<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Patientprofile Entity
 *
 * @property int $id
 * @property int|null $cin
 * @property int|null $mobile
 * @property string|null $profession
 * @property string|null $adresse
 * @property int|null $codepostal
 * @property string|null $situationfamiliale
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Patientprofile extends Entity
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
       'profession'=>true,
        'qrcode_id' => true,
        'created' => true,
        'modified' => true
    ];
}
