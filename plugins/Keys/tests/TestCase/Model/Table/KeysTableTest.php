<?php
namespace Keys\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Keys\Model\Table\KeysTable;

/**
 * Keys\Model\Table\KeysTable Test Case
 */
class KeysTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Keys\Model\Table\KeysTable
     */
    public $Keys;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.keys.keys'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Keys') ? [] : ['className' => 'Keys\Model\Table\KeysTable'];
        $this->Keys = TableRegistry::get('Keys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Keys);

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
