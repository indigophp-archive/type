# Indigo Comparison

[![Build Status](https://travis-ci.org/indigophp/comparison.svg?branch=develop)](https://travis-ci.org/indigophp/comparison)
[![Latest Stable Version](https://poser.pugx.org/indigophp/comparison/v/stable.png)](https://packagist.org/packages/indigophp/comparison)
[![Total Downloads](https://poser.pugx.org/indigophp/comparison/downloads.png)](https://packagist.org/packages/indigophp/comparison)
[![License](https://poser.pugx.org/indigophp/comparison/license.png)](https://packagist.org/packages/indigophp/comparison)

**This package makes comparing Value Objects possible.**


## Install

Via Composer

``` json
{
    "require": {
        "indigophp/comparison": "@stable"
    }
}
```


## Usage

Ever felt the need for comparing Value Objects based on internal values instead of their references?

If the answer is yes then take a look at this package.

``` php
use Indigo\Comparison\Comparable;

class ValueObject implements ComparableInterface
{
    use \Indigo\Comparison\SimpleComparableTrait;

    /**
     * {@inheritdoc}
     *
     * Returns -1|0|1 which means less than, equal to, greater than in the respective order
     */
    public function compareTo(self $value)
    {
        return rand(-1, 1);
    }
}
```

**Note:** You can use the `ComparableInterface` to mark the object as comparable, for the world, since it is hard to determine whether a class uses a trait or not. It is absolutely optional.


### Why `Trait`s?

As of PHP 5.4 using the `self` keyword in interfaces is not possible, or at least not the way it is required. See [this](https://bugs.php.net/bug.php?id=61924).

Since PHP does not support overloading using any direct inheritance is impossible.

As of PHP 5.4 a kind of multiple inheritance is available in the form of `Trait`s. They are basically copied in the class, so the inherited `self` hinting will point to the class.

**Note:** This also means that `self` means the inheriting class, so any further child class which does not use the trait explicitly should type hint the parent class. However, these traits are supposed to be used in Value Object implementation which should be generally treated as final.


## Testing

``` bash
$ codecept run
```


## Contributing

Please see [CONTRIBUTING](https://github.com/indigophp/comparison/blob/develop/CONTRIBUTING.md) for details.


## Credits

- [Márk Sági-Kazár](https://github.com/sagikazarmark)
- [All Contributors](https://github.com/indigophp/comparison/contributors)


## License

The MIT License (MIT). Please see [License File](https://github.com/indigophp/comparison/blob/develop/LICENSE) for more information.
