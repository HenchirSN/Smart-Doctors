<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Medicaments Model
 *
 * @property \App\Model\Table\OrdonnancesTable|\Cake\ORM\Association\HasMany $Ordonnances
 *
 * @method \App\Model\Entity\Medicament get($primaryKey, $options = [])
 * @method \App\Model\Entity\Medicament newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Medicament[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Medicament|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medicament|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medicament patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Medicament[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Medicament findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MedicamentsTable extends Table
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

        $this->setTable('medicaments');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Ordonnances', [
            'foreignKey' => 'medicament_id'
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
            ->scalar('label')
            ->maxLength('label', 256)
            ->requirePresence('label', 'create')
            ->allowEmptyString('label', false);

        return $validator;
    }
}
