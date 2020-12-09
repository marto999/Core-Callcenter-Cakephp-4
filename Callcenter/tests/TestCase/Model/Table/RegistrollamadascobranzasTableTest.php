<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegistrollamadascobranzasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegistrollamadascobranzasTable Test Case
 */
class RegistrollamadascobranzasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RegistrollamadascobranzasTable
     */
    protected $Registrollamadascobranzas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Registrollamadascobranzas',
        'app.Contratos',
        'app.Callcenters',
        'app.Campañas',
        'app.Respuestas',
        'app.Scripts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Registrollamadascobranzas') ? [] : ['className' => RegistrollamadascobranzasTable::class];
        $this->Registrollamadascobranzas = $this->getTableLocator()->get('Registrollamadascobranzas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Registrollamadascobranzas);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
