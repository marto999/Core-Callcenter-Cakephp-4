<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Operadoras Model
 *
 * @property \App\Model\Table\CampañasTable&\Cake\ORM\Association\HasMany $Campañas
 * @property \App\Model\Table\ContratosTable&\Cake\ORM\Association\HasMany $Contratos
 *
 * @method \App\Model\Entity\Operadora newEmptyEntity()
 * @method \App\Model\Entity\Operadora newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Operadora[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Operadora get($primaryKey, $options = [])
 * @method \App\Model\Entity\Operadora findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Operadora patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Operadora[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Operadora|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Operadora saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Operadora[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Operadora[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Operadora[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Operadora[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OperadorasTable extends Table
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

        $this->setTable('operadoras');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->hasMany('Campañas', [
            'foreignKey' => 'operadora_id',
        ]);
        $this->hasMany('Contratos', [
            'foreignKey' => 'operadora_id',
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
