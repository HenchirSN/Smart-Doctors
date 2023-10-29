<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Docprofiles Model
 *
 * @method \App\Model\Entity\Docprofile get($primaryKey, $options = [])
 * @method \App\Model\Entity\Docprofile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Docprofile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Docprofile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Docprofile|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Docprofile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Docprofile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Docprofile findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DocprofilesTable extends Table
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

        $this->setTable('docprofiles');
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
            ->integer('telephonecabinet')
            ->allowEmptyString('telephonecabinet');

        $validator
            ->integer('telephonecabinetautre')
            ->allowEmptyString('telephonecabinetautre');

        $validator
            ->scalar('specialité')
            ->maxLength('specialité', 256)
            ->allowEmptyString('specialité');


        $validator
            ->scalar('adressepro')
            ->maxLength('adressepro', 256)
            ->allowEmptyString('adressepro');

        $validator
            ->scalar('modeexercice')
            ->maxLength('modeexercice', 256)
            ->allowEmptyString('modeexercice');



        return $validator;
    }
}
