<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImageeventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImageeventsTable Test Case
 */
class ImageeventsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImageeventsTable
     */
    public $Imageevents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Imageevents',
        'app.Events'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Imageevents') ? [] : ['className' => ImageeventsTable::class];
        $this->Imageevents = TableRegistry::getTableLocator()->get('Imageevents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Imageevents);

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
