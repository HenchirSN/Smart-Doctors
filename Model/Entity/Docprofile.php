<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Docprofile Entity
 *
 * @property int $id
 * @property int|null $cin
 * @property string|null $datenaissance
 * @property int|null $mobile
 * @property int|null $mobileautre
 * @property int|null $telephonecabinet
 * @property int|null $telephonecabinetautre
 * @property string|null $specialité
 * @property string|null $adresse
 * @property string|null $adressepro
 * @property string|null $modeexercice
 * @property int|null $codepostal
 * @property string|null $situationfamiliale
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Docprofile extends Entity
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
        'telephonecabinet' => true,
        'telephonecabinetautre' => true,
        'specialité' => true,

        'adressepro' => true,
        'modeexercice' => true,

        'created' => true,
        'modified' => true
    ];
}
