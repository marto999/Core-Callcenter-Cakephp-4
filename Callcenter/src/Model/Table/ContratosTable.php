<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contratos Model
 *
 * @property \App\Model\Table\ClientesTable&\Cake\ORM\Association\BelongsTo $Clientes
 * @property \App\Model\Table\EstadopagosTable&\Cake\ORM\Association\BelongsTo $Estadopagos
 * @property \App\Model\Table\OperadorasTable&\Cake\ORM\Association\BelongsTo $Operadoras
 * @property \App\Model\Table\ProductosTable&\Cake\ORM\Association\BelongsTo $Productos
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\RegistrollamadascobranzasTable&\Cake\ORM\Association\HasMany $Registrollamadascobranzas
 *
 * @method \App\Model\Entity\Contrato newEmptyEntity()
 * @method \App\Model\Entity\Contrato newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Contrato[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contrato get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contrato findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Contrato patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contrato[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contrato|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contrato saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contrato[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contrato[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contrato[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contrato[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ContratosTable extends Table
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

        $this->setTable('contratos');
        $this->setDisplayField('cliente_id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Estadopagos', [
            'foreignKey' => 'estadopago_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Operadoras', [
            'foreignKey' => 'operadora_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Productos', [
            'foreignKey' => 'producto_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Registrollamadascobranzas', [
            'foreignKey' => 'contrato_id',
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
            ->date('fechainicio')
            ->allowEmptyDate('fechainicio');

        $validator
            ->date('fechafin')
            ->allowEmptyDate('fechafin');

        $validator
            ->scalar('descripcion')
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
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'), ['errorField' => 'cliente_id']);
        $rules->add($rules->existsIn(['estadopago_id'], 'Estadopagos'), ['errorField' => 'estadopago_id']);
        $rules->add($rules->existsIn(['operadora_id'], 'Operadoras'), ['errorField' => 'operadora_id']);
        $rules->add($rules->existsIn(['producto_id'], 'Productos'), ['errorField' => 'producto_id']);
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
