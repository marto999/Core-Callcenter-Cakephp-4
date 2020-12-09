<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstadopagosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstadopagosTable Test Case
 */
class EstadopagosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EstadopagosTable
     */
    protected $Estadopagos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Estadopagos',
        'app.Contratos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Estadopagos') ? [] : ['className' => EstadopagosTable::class];
        $this->Estadopagos = $this->getTableLocator()->get('Estadopagos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Estadopagos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
