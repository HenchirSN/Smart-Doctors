<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Qrcode Model
 *
 * @property \App\Model\Table\PatientprofilesTable|\Cake\ORM\Association\HasMany $Patientprofiles
 *
 * @method \App\Model\Entity\Qrcode get($primaryKey, $options = [])
 * @method \App\Model\Entity\Qrcode newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Qrcode[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Qrcode|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Qrcode|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Qrcode patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Qrcode[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Qrcode findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QrcodeTable extends Table
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

        $this->setTable('qrcode');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Patientprofiles', [
            'foreignKey' => 'qrcode_id'
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
            ->scalar('code')
            ->maxLength('code', 265)
            ->requirePresence('code', 'create')
            ->allowEmptyString('code', false);

        return $validator;
    }
}
