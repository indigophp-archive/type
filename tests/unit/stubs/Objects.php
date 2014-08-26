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
 * Dummy Object
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class DummyObject
{
    use AssertComparableTrait;
    use SimpleComparableTrait;
    use AssertSameTrait;
    use SameTrait;

    /**
     * Value
     *
     * @var mixed
     */
    protected $value;

    /**
     * Creates a new Dummy Type
     *
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Returns the value
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * {@inheritdoc}
     */
    public function compareTo(self $value)
    {
        return $this->isSame($value) ? 0 : ($this->value > $value->getValue() ? 1 : -1);
    }

    /**
     * {@inheritdoc}
     */
    public function isSame(self $value)
    {
        return $this->value === $value->getValue();
    }
}
