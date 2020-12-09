<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ciudades Model
 *
 * @property \App\Model\Table\ClientesTable&\Cake\ORM\Association\HasMany $Clientes
 *
 * @method \App\Model\Entity\Ciudade newEmptyEntity()
 * @method \App\Model\Entity\Ciudade newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ciudade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ciudade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ciudade findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ciudade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ciudade[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ciudade|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ciudade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ciudade[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ciudade[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ciudade[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ciudade[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CiudadesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('ciudades');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->hasMany('Clientes', [
            'foreignKey' => 'ciudade_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 45)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        return $validator;
    }
}
