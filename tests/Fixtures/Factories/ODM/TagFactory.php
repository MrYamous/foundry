<?php

/*
 * This file is part of the zenstruck/foundry package.
 *
 * (c) Kevin Bond <kevinbond@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenstruck\Foundry\Tests\Fixtures\Factories\ODM;

use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Tests\Fixtures\Document\Tag;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
final class TagFactory extends ModelFactory
{
    protected static function getClass(): string
    {
        return Tag::class;
    }

    protected function getDefaults(): array
    {
        return ['name' => self::faker()->sentence()];
    }
}
