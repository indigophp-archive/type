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
        ];
    }

    /**
     * @covers       ::compareTo
     * @covers       ::equals
     * @covers       ::greaterThan
     * @covers       ::greaterThanOrEqual
     * @covers       ::lessThan
     * @covers       ::lessThanOrEqual
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
                break;
            case -1:
                $less = true;
                break;
            case 1:
                $greater = true;
                break;
        }

        $this->assertEquals($equals, $value->equals($other));
        $this->assertEquals($greater, $value->greaterThan($other));
        $this->assertEquals($greater or $equals, $value->greaterThanOrEqual($other));
        $this->assertEquals($less, $value->lessThan($other));
        $this->assertEquals($less or $equals, $value->lessThanOrEqual($other));
    }
}
