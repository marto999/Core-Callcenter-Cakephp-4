<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CallcentersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CallcentersTable Test Case
 */
class CallcentersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CallcentersTable
     */
    protected $Callcenters;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Callcenters',
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
        $config = $this->getTableLocator()->exists('Callcenters') ? [] : ['className' => CallcentersTable::class];
        $this->Callcenters = $this->getTableLocator()->get('Callcenters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Callcenters);

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
