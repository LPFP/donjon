<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecordsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecordsTable Test Case
 */
class RecordsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RecordsTable
     */
    public $Records;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.records'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Records') ? [] : ['className' => 'App\Model\Table\RecordsTable'];
        $this->Records = TableRegistry::get('Records', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Records);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
