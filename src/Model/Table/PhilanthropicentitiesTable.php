<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Philanthropicentities Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Philanthropicentity get($primaryKey, $options = [])
 * @method \App\Model\Entity\Philanthropicentity newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Philanthropicentity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Philanthropicentity|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Philanthropicentity|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Philanthropicentity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Philanthropicentity[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Philanthropicentity findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PhilanthropicentitiesTable extends Table
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

        $this->setTable('philanthropicentities');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->allowEmptyString('id', 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('name')
            ->maxLength('name', 60)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        $validator
            ->scalar('image')
            ->maxLength('image', 120)
            ->requirePresence('image', 'create')
            ->allowEmptyFile('image', false);

        $validator
            ->scalar('description')
            ->maxLength('description', 1024)
            ->requirePresence('description', 'create')
            ->allowEmptyString('description', false);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->allowEmptyString('email', false);

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 60)
            ->requirePresence('telephone', 'create')
            ->allowEmptyString('telephone', false);

        $validator
            ->scalar('whatsapp')
            ->maxLength('whatsapp', 50)
            ->allowEmptyString('whatsapp');

        $validator
            ->scalar('address1')
            ->maxLength('address1', 60)
            ->requirePresence('address1', 'create')
            ->allowEmptyString('address1', false);

        $validator
            ->scalar('address2')
            ->maxLength('address2', 60)
            ->allowEmptyString('address2');

        $validator
            ->scalar('zipcode')
            ->maxLength('zipcode', 45)
            ->requirePresence('zipcode', 'create')
            ->allowEmptyString('zipcode', false);

        $validator
            ->scalar('city')
            ->maxLength('city', 60)
            ->requirePresence('city', 'create')
            ->allowEmptyString('city', false);

        $validator
            ->scalar('state')
            ->maxLength('state', 45)
            ->requirePresence('state', 'create')
            ->allowEmptyString('state', false);

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->allowEmptyString('status', false);

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
        $rules->add($rules->isUnique(['id']));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
