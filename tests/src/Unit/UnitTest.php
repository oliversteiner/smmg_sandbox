<?php
/**
 * Created by PhpStorm.
 * User: ost
 * Date: 2019-01-07
 * Time: 01:31
 *
 * https://www.axelerant.com/resources/team-blog/drupal-8-writing-your-first-unit-test-with-phpunit
 */

namespace Drupal\Tests\smmg_sandbox\Unit;


use Drupal\smmg_sandbox\Utility\Unit;
use Drupal\Tests\UnitTestCase;

/**
 * Simple test to ensure that asserts pass.
 *
 * @group smmg_sandbox
 */
class UnitTest extends UnitTestCase
{
    protected $unit;

    /**
     * Before a test method is run, setUp() is invoked.
     * Create new unit object.
     */
    public function setUp()
    {
        $this->unit = new Unit();
    }

    /**
     * @covers Drupal\smmg_sandbox\Utility\Unit::setLength
     */
    public function testSetLength()
    {
        $this->assertEquals(0, $this->unit->getLength());
        $this->unit->setLength(9);
        $this->assertEquals(9, $this->unit->getLength());
    }

    /**
     * @covers Drupal\smmg_sandbox\Utility\Unit::getLength
     */
    public function testGetLength()
    {
        $this->unit->setLength(9);
        $this->assertNotEquals(10, $this->unit->getLength());
    }

    /**
     * Once test method has finished running, whether it succeeded or failed, tearDown() will be invoked.
     * Unset the $unit object.
     */
    public function tearDown()
    {
        unset($this->unit);
    }
}