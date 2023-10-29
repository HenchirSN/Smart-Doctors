<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pharmaciesprofile Entity
 *
 * @property int $id
 * @property int|null $cin
 * @property string|null $datenaissance
 * @property int|null $mobile
 * @property int|null $mobileautre
 * @property string|null $adresse
 * @property string|null $codepostal
 * @property string|null $situationfamiliale
 * @property string|null $telephonepharmacie
 * @property int|null $telephonepharmacieautre
 * @property string|null $adressepharmacie
 * @property string|null $mode
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Pharmaciesprofile extends Entity
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

        'mobileautre' => true,

        'telephonepharmacie' => true,
        'telephonepharmacieautre' => true,
        'adressepharmacie' => true,
        'mode' => true,
        'created' => true,
        'modified' => true
    ];
}
