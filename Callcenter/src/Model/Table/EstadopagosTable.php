<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estadopagos Model
 *
 * @property \App\Model\Table\ContratosTable&\Cake\ORM\Association\HasMany $Contratos
 *
 * @method \App\Model\Entity\Estadopago newEmptyEntity()
 * @method \App\Model\Entity\Estadopago newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Estadopago[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estadopago get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estadopago findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Estadopago patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estadopago[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estadopago|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estadopago saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estadopago[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Estadopago[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Estadopago[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Estadopago[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EstadopagosTable extends Table
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

        $this->setTable('estadopagos');
        $this->setDisplayField('estado');
        $this->setPrimaryKey('id');

        $this->hasMany('Contratos', [
            'foreignKey' => 'estadopago_id',
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
            ->scalar('estado')
            ->maxLength('estado', 45)
            ->requirePresence('estado', 'create')
            ->notEmptyString('estado');

        return $validator;
    }
}
