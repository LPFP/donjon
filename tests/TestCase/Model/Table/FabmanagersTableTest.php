<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FabmanagersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FabmanagersTable Test Case
 */
class FabmanagersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FabmanagersTable
     */
    public $Fabmanagers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fabmanagers',
        'app.key_borrows',
        'app.keys'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Fabmanagers') ? [] : ['className' => 'App\Model\Table\FabmanagersTable'];
        $this->Fabmanagers = TableRegistry::get('Fabmanagers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fabmanagers);

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
