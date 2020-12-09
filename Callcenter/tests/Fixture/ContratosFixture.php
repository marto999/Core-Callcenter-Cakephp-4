<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContratosFixture
 */
class ContratosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cliente_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fechainicio' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'fechafin' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'estadopago_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'operadora_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'producto_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'descripcion' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_contrato_cliente_idx' => ['type' => 'index', 'columns' => ['cliente_id'], 'length' => []],
            'fk_contrato_operadora_idx' => ['type' => 'index', 'columns' => ['operadora_id'], 'length' => []],
            'fk_contrato_producto_idx' => ['type' => 'index', 'columns' => ['producto_id'], 'length' => []],
            'fk_contrato_estado_idx' => ['type' => 'index', 'columns' => ['estadopago_id'], 'length' => []],
            'fk_contrato_producto_idx1' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_contrato_users' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_contrato_producto' => ['type' => 'foreign', 'columns' => ['producto_id'], 'references' => ['productos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_contrato_operadora' => ['type' => 'foreign', 'columns' => ['operadora_id'], 'references' => ['operadoras', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_contrato_estado' => ['type' => 'foreign', 'columns' => ['estadopago_id'], 'references' => ['estadopagos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_contrato_cliente' => ['type' => 'foreign', 'columns' => ['cliente_id'], 'references' => ['clientes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'cliente_id' => 1,
                'fechainicio' => '2020-11-15',
                'fechafin' => '2020-11-15',
                'estadopago_id' => 1,
                'operadora_id' => 1,
                'producto_id' => 1,
                'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'user_id' => 1,
            ],
        ];
        parent::init();
    }
}
