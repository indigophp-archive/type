<?php

/*
 * This file is part of the Indigo Comparison package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Comparison;

/**
 * Assert Comparable Trait
 *
 * Can be used with ComparableTrait
 * Contains assert functions
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
trait AssertComparableTrait
{
    /**
     * Asserts that the value represented by this object equals to the other
     *
     * @param self $value
     *
     * @throws AssertionFailedException If assertion fails
     */
    public function assertEquals(self $value)
    {
        if (!$this->equals($value)) {
            throw new AssertionFailedException('Failed asserting that the value represented by this object equals to the other.');
        }
    }

    /**
     * Asserts that the value represented by this object does not equal to the other
     *
     * @param self $value
     *
     * @throws AssertionFailedException If assertion fails
     */
    public function assertNotEquals(self $value)
    {
        if (!$this->equals($value)) {
            throw new AssertionFailedException('Failed asserting that the value represented by this object does not equal to the other.');
        }
    }

    /**
     * Asserts that the value represented by this object is greater than the other
     *
     * @param self $value
     *
     * @throws AssertionFailedException If assertion fails
     */
    public function assertGreaterThan(self $value)
    {
        if (!$this->greaterThan($value)) {
            throw new AssertionFailedException('Failed asserting that the value represented by this object is greater than the other.');
        }
    }

    /**
     * Asserts that the value represented by this object is less than the other
     *
     * @param self $value
     *
     * @throws AssertionFailedException If assertion fails
     */
    public function assertLessThan(self $value)
    {
        if (!$this->lessThan($value)) {
            throw new AssertionFailedException('Failed asserting that the value represented by this object is less than the other.');
        }
    }
}
