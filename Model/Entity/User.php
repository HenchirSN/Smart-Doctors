<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $password
 * @property string $token
 * @property bool $active
 * @property int $role_id
 * @property int $profile_id
 * @property int $region_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Profile $profile
 * @property \App\Model\Entity\Region $region
 */
class User extends Entity
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
        'firstname' => true,
        'lastname' => true,
        'url' => true,

        'email' => true,
        'emailres' => true,
        'password' => true,
        'cin' => true,
        'datenaissance' => true,
        'mobile' => true,
        'adresse' => true,
        'codepostal' => true,
        'situationfamiliale' => true,
        'token' => true,
        'active' => true,
        'role_id' => true,
        'profile_id' => true,
        'region_id' => true,
        'created' => true,
        'modified' => true,
        'role' => true,
        'profile' => true,
        'region' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
        'token'
    ];






     protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }
}
