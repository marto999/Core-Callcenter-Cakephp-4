<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Registrollamadascobranzas Model
 *
 * @property \App\Model\Table\ContratosTable&\Cake\ORM\Association\BelongsTo $Contratos
 * @property \App\Model\Table\CallcentersTable&\Cake\ORM\Association\BelongsTo $Callcenters
 * @property \App\Model\Table\CampañasTable&\Cake\ORM\Association\BelongsTo $Campañas
 * @property \App\Model\Table\RespuestasTable&\Cake\ORM\Association\BelongsTo $Respuestas
 * @property \App\Model\Table\ScriptsTable&\Cake\ORM\Association\BelongsTo $Scripts
 *
 * @method \App\Model\Entity\Registrollamadascobranza newEmptyEntity()
 * @method \App\Model\Entity\Registrollamadascobranza newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Registrollamadascobranza[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Registrollamadascobranza get($primaryKey, $options = [])
 * @method \App\Model\Entity\Registrollamadascobranza findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Registrollamadascobranza patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Registrollamadascobranza[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Registrollamadascobranza|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Registrollamadascobranza saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Registrollamadascobranza[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Registrollamadascobranza[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Registrollamadascobranza[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Registrollamadascobranza[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RegistrollamadascobranzasTable extends Table
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

        $this->setTable('registrollamadascobranzas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Contratos', [
            'foreignKey' => 'contrato_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Callcenters', [
            'foreignKey' => 'callcenter_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Campañas', [
            'foreignKey' => 'campaña_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Respuestas', [
            'foreignKey' => 'respuesta_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Scripts', [
            'foreignKey' => 'script_id',
            'joinType' => 'INNER',
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
            ->dateTime('fecha_llamada')
            ->allowEmptyDateTime('fecha_llamada');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 100)
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
        $rules->add($rules->existsIn(['contrato_id'], 'Contratos'), ['errorField' => 'contrato_id']);
        $rules->add($rules->existsIn(['callcenter_id'], 'Callcenters'), ['errorField' => 'callcenter_id']);
        $rules->add($rules->existsIn(['campaña_id'], 'Campañas'), ['errorField' => 'campaña_id']);
        $rules->add($rules->existsIn(['respuesta_id'], 'Respuestas'), ['errorField' => 'respuesta_id']);
        $rules->add($rules->existsIn(['script_id'], 'Scripts'), ['errorField' => 'script_id']);

        return $rules;
    }
}
