<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CampañasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CampañasTable Test Case
 */
class CampañasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CampañasTable
     */
    protected $Campañas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Campañas',
        'app.Operadoras',
        'app.Registrollamadascobranzas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Campañas') ? [] : ['className' => CampañasTable::class];
        $this->Campañas = $this->getTableLocator()->get('Campañas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Campañas);

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
