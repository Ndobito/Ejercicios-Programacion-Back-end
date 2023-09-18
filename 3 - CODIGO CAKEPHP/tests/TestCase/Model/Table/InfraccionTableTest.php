<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InfraccionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InfraccionTable Test Case
 */
class InfraccionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InfraccionTable
     */
    protected $Infraccion;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Infraccion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Infraccion') ? [] : ['className' => InfraccionTable::class];
        $this->Infraccion = $this->getTableLocator()->get('Infraccion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Infraccion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InfraccionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
