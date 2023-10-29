<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\RolesTable|\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\ProfilesTable|\Cake\ORM\Association\BelongsTo $Profiles
 * @property \App\Model\Table\RegionsTable|\Cake\ORM\Association\BelongsTo $Regions
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('firstname');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER'
        ]);
        
        $this->belongsTo('Regions', [
            'foreignKey' => 'region_id',
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
            ->scalar('firstname')
            ->maxLength('firstname', 256)
            ->requirePresence('firstname', 'create')
            ->allowEmptyString('firstname', false);

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 256)
            ->requirePresence('lastname', 'create')
            ->allowEmptyString('lastname', false);
            $validator
            ->scalar('url')
            ->maxLength('url', 256)
            ->requirePresence('url', 'create')
            ->allowEmptyString('url', false);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->allowEmptyString('email', false)
             ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);
        $validator
            ->email('emailres')
            ->requirePresence('emailres', 'create')
            ->allowEmptyString('emailres', false)
            ->add('emailres', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 256)
            ->requirePresence('password', 'create')
            ->allowEmptyString('password', false);
        $validator
            ->integer('cin')
            ->requirePresence('cin', 'create')
            ->allowEmptyString('cin', false);

        $validator
            ->scalar('	datenaissance')
            ->requirePresence('datenaissance', 'create')
            ->allowEmptyString('datenaissance', false);

        $validator
            ->integer('mobile')
            ->requirePresence('mobile', 'create')
            ->allowEmptyString('mobile', false);

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 265)
            ->requirePresence('adresse', 'create')
            ->allowEmptyString('adresse', false);

        $validator
            ->integer('codepostal')
            ->requirePresence('codepostal', 'create')
            ->allowEmptyString('codepostal', false);

        $validator
            ->scalar('situationfamiliale')
            ->maxLength('situationfamiliale', 265)
            ->requirePresence('situationfamiliale', 'create')
            ->allowEmptyString('situationfamiliale', false);

        $validator
            ->scalar('token')
            ->maxLength('token', 256)
             ->add('token', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);
            

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->allowEmptyString('active', false);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['token']));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));
        $rules->add($rules->existsIn(['region_id'], 'Regions'));

        return $rules;
    }


    public function generateToken()
    {
      $token=bin2hex(random_bytes(4));
      return $token;

    }
}
