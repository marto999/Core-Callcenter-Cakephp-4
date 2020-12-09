<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Campañas Model
 *
 * @property \App\Model\Table\OperadorasTable&\Cake\ORM\Association\BelongsTo $Operadoras
 * @property \App\Model\Table\RegistrollamadascobranzasTable&\Cake\ORM\Association\HasMany $Registrollamadascobranzas
 *
 * @method \App\Model\Entity\Campaña newEmptyEntity()
 * @method \App\Model\Entity\Campaña newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Campaña[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Campaña get($primaryKey, $options = [])
 * @method \App\Model\Entity\Campaña findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Campaña patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Campaña[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Campaña|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Campaña saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Campaña[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Campaña[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Campaña[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Campaña[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CampañasTable extends Table
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

        $this->setTable('campañas');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->belongsTo('Operadoras', [
            'foreignKey' => 'operadora_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Registrollamadascobranzas', [
            'foreignKey' => 'campaña_id',
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

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 45)
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['operadora_id'], 'Operadoras'), ['errorField' => 'operadora_id']);

        return $rules;
    }
}
