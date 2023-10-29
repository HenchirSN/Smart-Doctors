<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Patientprofiles Model
 *
 * @method \App\Model\Entity\Patientprofile get($primaryKey, $options = [])
 * @method \App\Model\Entity\Patientprofile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Patientprofile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Patientprofile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Patientprofile|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Patientprofile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Patientprofile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Patientprofile findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PatientprofilesTable extends Table
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

        $this->setTable('patientprofiles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');


        $this->belongsTo('Qrcode', [
            'foreignKey' => 'qrcode_id',
            'joinType' => 'INNER'
        ]);
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
            ->scalar('profession')
            ->maxLength('profession', 256)
            ->allowEmptyString('profession');



        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {

        $rules->add($rules->existsIn(['qrcode_id'], 'Qrcode'));

        return $rules;
    }

}
