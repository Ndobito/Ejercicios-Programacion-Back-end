<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConductoresTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConductoresTable Test Case
 */
class ConductoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConductoresTable
     */
    protected $Conductores;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Conductores',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Conductores') ? [] : ['className' => ConductoresTable::class];
        $this->Conductores = $this->getTableLocator()->get('Conductores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Conductores);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConductoresTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
