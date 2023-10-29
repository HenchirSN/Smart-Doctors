<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pharmaciesprofiles Model
 *
 * @method \App\Model\Entity\Pharmaciesprofile get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pharmaciesprofile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pharmaciesprofile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pharmaciesprofile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pharmaciesprofile|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pharmaciesprofile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pharmaciesprofile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pharmaciesprofile findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PharmaciesprofilesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('pharmaciesprofiles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');


        $validator
            ->integer('mobileautre')
            ->allowEmptyString('mobileautre');



        $validator
            ->scalar('telephonepharmacie')
            ->maxLength('telephonepharmacie', 256)
            ->allowEmptyString('telephonepharmacie');

        $validator
            ->integer('telephonepharmacieautre')
            ->allowEmptyString('telephonepharmacieautre');

        $validator
            ->scalar('adressepharmacie')
            ->maxLength('adressepharmacie', 256)
            ->allowEmptyString('adressepharmacie');

        $validator
            ->scalar('mode')
            ->maxLength('mode', 256)
            ->allowEmptyString('mode');

        return $validator;
    }
}
