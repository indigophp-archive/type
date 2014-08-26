<?php

/*
 * This file is part of the Indigo Type package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Comparison;

use Codeception\TestCase\Test;

/**
 * Tests for Comparable
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 *
 * @coversDefaultClass Indigo\Type\Comparison\ComparableTrait
 */
class ComparableTest extends Test
{
    public function valueProvider()
    {
        return [
            0 => [0, 1, -1],
            1 => [0, 0, 0],
            2 => [1, 0, 1],
            3 => [-2, -1, -1],
            4 => [-1, -1, 0],
            5 => [1, -1, 1],
        ];
    }

    /**
     * @dataProvider valueProvider
     */
    public function testCompare($value, $other, $compare)
    {
        $value = new DummyObject($value);
        $other = new DummyObject($other);

        $this->assertEquals($compare, $value->compareTo($other));

        $equals = $greater = $less = false;

        switch ($compare) {
            case 0:
                $equals = true;

                $value->assertEquals($other);
                break;
            case -1:
                $less = true;

                $value->assertLessThan($other);
                $value->assertNotEquals($other);
                break;
            case 1:
                $greater = true;

                $value->assertGreaterThan($other);
                $value->assertNotEquals($other);
                break;
        }

        $this->assertEquals($equals, $value->equals($other));
        $this->assertEquals($greater, $value->greaterThan($other));
        $this->assertEquals($greater or $equals, $value->greaterThanOrEqual($other));
        $this->assertEquals($less, $value->lessThan($other));
        $this->assertEquals($less or $equals, $value->lessThanOrEqual($other));
    }

    /**
     * @expectedException Indigo\Comparison\AssertionFailedException
     */
    public function testAssertEqualsFail()
    {
        $value = new DummyObject(1);
        $other = new DummyObject(0);

        $value->assertEquals($other);
    }

    /**
     * @expectedException Indigo\Comparison\AssertionFailedException
     */
    public function testAssertNotEqualsFail()
    {
        $value = new DummyObject(1);
        $other = new DummyObject(1);

        $value->assertNotEquals($other);
    }

    /**
     * @expectedException Indigo\Comparison\AssertionFailedException
     */
    public function testAssertGreaterThanFail()
    {
        $value = new DummyObject(0);
        $other = new DummyObject(1);

        $value->assertGreaterThan($other);
    }

    /**
     * @expectedException Indigo\Comparison\AssertionFailedException
     */
    public function testAssertLessThanFail()
    {
        $value = new DummyObject(1);
        $other = new DummyObject(0);

        $value->assertLessThan($other);
    }
}
