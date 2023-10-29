<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Admindocteurrapports Model
 *
 * @method \App\Model\Entity\Admindocteurrapport get($primaryKey, $options = [])
 * @method \App\Model\Entity\Admindocteurrapport newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Admindocteurrapport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Admindocteurrapport|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Admindocteurrapport|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Admindocteurrapport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Admindocteurrapport[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Admindocteurrapport findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AdmindocteurrapportsTable extends Table
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

        $this->setTable('admindocteurrapports');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'admin_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'docteur_id',
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
            ->scalar('objet')
            ->maxLength('objet', 265)
            ->requirePresence('objet', 'create')
            ->allowEmptyString('objet', false);

        $validator
            ->scalar('rapport')
            ->requirePresence('rapport', 'create')
            ->allowEmptyString('rapport', false);

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['docteur_id'], 'Users'));
        $rules->add($rules->existsIn(['admin_id'], 'Users'));

        return $rules;
    }
}
