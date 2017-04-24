<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\FlashComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\FlashComponent Test Case
 */
class FlashComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Controller\Component\FlashComponent
     */
    public $FlashComponent;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->FlashComponent = new FlashComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FlashComponent);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
