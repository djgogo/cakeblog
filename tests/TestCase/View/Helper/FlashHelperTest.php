<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\FlashHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\FlashHelper Test Case
 */
class FlashHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\FlashHelper
     */
    public $FlashHelper;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->FlashHelper = new FlashHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FlashHelper);

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
