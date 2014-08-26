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
 * Simple Comparable Trait
 *
 * Implements all the functions from the parent trait
 * Value object only needs to implement a compare function
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
trait SimpleComparableTrait
{
    use ComparableTrait;

    /**
     * Returns an integer less than, equal to, or greater than zero
     * if the value of this object is considered to be respectively
     * less than, equal to, or greater than the other
     *
     * @param self $value
     *
     * @return integer -1|0|1
     */
    abstract public function compareTo(self $value);

    /**
     * {@inheritdoc}
     */
    public function equals(self $value)
    {
        return $this->compareTo($value) === 0;
    }

    /**
     * {@inheritdoc}
     */
    public function notEquals(self $value)
    {
        return $this->compareTo($value) !== 0;
    }

    /**
     * {@inheritdoc}
     */
    public function greaterThan(self $value)
    {
        return $this->compareTo($value) === 1;
    }

    /**
     * {@inheritdoc}
     */
    public function greaterThanOrEqual(self $value)
    {
        return $this->compareTo($value) >= 0;
    }

    /**
     * {@inheritdoc}
     */
    public function lessThan(self $value)
    {
        return $this->compareTo($value) === -1;
    }

    /**
     * {@inheritdoc}
     */
    public function lessThanOrEqual(self $value)
    {
        return $this->compareTo($value) <= 0;
    }
}
