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
 * Assert Same Trait
 *
 * Can be used with SameTrait
 * Contains an assert function
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
trait AssertSameTrait
{
    /**
     * Asserts that the other object is the same as this
     *
     * @param self $value
     *
     * @throws AssertionFailedException If assertion fails
     */
    public function assertSame(self $value)
    {
        if (!$this->isSame($value)) {
            throw new AssertionFailedException('Failed asserting that the two values are the same.');
        }
    }
}
