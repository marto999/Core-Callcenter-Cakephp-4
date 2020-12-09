<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RegistrollamadascobranzasFixture
 */
class RegistrollamadascobranzasFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'fecha_llamada' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'descripcion' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'contrato_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'callcenter_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'campaña_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'respuesta_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'script_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_reg_contrato_idx' => ['type' => 'index', 'columns' => ['contrato_id'], 'length' => []],
            'fk_reg_callcenter_idx' => ['type' => 'index', 'columns' => ['callcenter_id'], 'length' => []],
            'fk_reg_campaña_idx' => ['type' => 'index', 'columns' => ['campaña_id'], 'length' => []],
            'fk_reg_script_idx' => ['type' => 'index', 'columns' => ['script_id'], 'length' => []],
            'fk_reg_respuesta_idx' => ['type' => 'index', 'columns' => ['respuesta_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_reg_script' => ['type' => 'foreign', 'columns' => ['script_id'], 'references' => ['scripts', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_reg_respuesta' => ['type' => 'foreign', 'columns' => ['respuesta_id'], 'references' => ['respuestas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_reg_contrato' => ['type' => 'foreign', 'columns' => ['contrato_id'], 'references' => ['contratos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_reg_campaña' => ['type' => 'foreign', 'columns' => ['campaña_id'], 'references' => ['campañas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_reg_callcenter' => ['type' => 'foreign', 'columns' => ['callcenter_id'], 'references' => ['callcenters', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'fecha_llamada' => '2020-11-15 16:25:29',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'contrato_id' => 1,
                'callcenter_id' => 1,
                'campaña_id' => 1,
                'respuesta_id' => 1,
                'script_id' => 1,
            ],
        ];
        parent::init();
    }
}
