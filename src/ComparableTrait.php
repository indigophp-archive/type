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
 * Comparable Trait
 *
 * Compare objects based on scalar values
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
trait ComparableTrait
{
    /**
     * Checks whether the value represented by this object equals to the other
     *
     * @param self $value
     *
     * @return boolean
     */
    abstract public function equals(self $value);

    /**
     * Checks whether the value represented by this object does not equal to the other
     *
     * @param self $value
     *
     * @return boolean
     */
    abstract public function notEquals(self $value);

    /**
     * Checks whether the value represented by this object is greater than the other
     *
     * @param self $value
     *
     * @return boolean
     */
    abstract public function greaterThan(self $value);

    /**
     * Checks whether the value represented by this object is greater than or equals the other
     *
     * @param self $value
     *
     * @return boolean
     */
    abstract public function greaterThanOrEqual(self $value);

    /**
     * Checks whether the value represented by this object is less than the other
     *
     * @param self $value
     *
     * @return boolean
     */
    abstract public function lessThan(self $value);

    /**
     * Checks whether the value represented by this object is less than or equals the other
     *
     * @param self $value
     *
     * @return boolean
     */
    abstract public function lessThanOrEqual(self $value);
}
