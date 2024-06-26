<?php

/*
 * This file is part of the zenstruck/foundry package.
 *
 * (c) Kevin Bond <kevinbond@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenstruck\Foundry\Tests\Fixtures\Factories;

use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Tests\Fixtures\PHP81\EntityWithEnum;
use Zenstruck\Foundry\Tests\Fixtures\PHP81\SomeEnum;

final class EntityWithEnumFactory extends ModelFactory
{
    protected function getDefaults(): array
    {
        return [
            'enum' => self::faker()->randomElement(SomeEnum::cases()),
        ];
    }

    protected static function getClass(): string
    {
        return EntityWithEnum::class;
    }
}
