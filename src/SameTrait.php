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
 * Same Trait
 *
 * Used for checking if two objects should be considered to be same,
 * even if they does not point to the same reference
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
trait SameTrait
{
    /**
     * Checks if this object should be considered to be the same as the other
     *
     * @param self $value
     *
     * @return boolean
     */
    abstract public function isSame(self $value);
}
