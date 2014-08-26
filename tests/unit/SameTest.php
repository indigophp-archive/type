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
 * Tests for Same
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 *
 * @coversDefaultClass Indigo\Type\Comparison\SameTrait
 */
class SameTest extends Test
{
    public function valueProvider()
    {
        return [
            0 => [0, 1, false],
            1 => [0, 0, true],
            2 => [1, 0, false],
            3 => [-2, -1, false],
            4 => [-1, -1, true],
            5 => [1, -1, false],
        ];
    }

    /**
     * @dataProvider valueProvider
     */
    public function testCompare($value, $other, $same)
    {
        $value = new DummyObject($value);
        $other = new DummyObject($other);

        $this->assertEquals($same, $value->isSame($other));

        if ($same) {
            $value->assertSame($other);
        }
    }

    /**
     * @expectedException Indigo\Comparison\AssertionFailedException
     */
    public function testAssertSameFail()
    {
        $value = new DummyObject(1);
        $other = new DummyObject(0);

        $value->assertSame($other);
    }
}
