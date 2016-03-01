<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KeyBorrowsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KeyBorrowsTable Test Case
 */
class KeyBorrowsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KeyBorrowsTable
     */
    public $KeyBorrows;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.key_borrows',
        'app.keys',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('KeyBorrows') ? [] : ['className' => 'App\Model\Table\KeyBorrowsTable'];
        $this->KeyBorrows = TableRegistry::get('KeyBorrows', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->KeyBorrows);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
