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
use Zenstruck\Foundry\Tests\Fixtures\Entity\EntityForRelations;

class EntityForRelationsFactory extends ModelFactory
{
    protected static function getClass(): string
    {
        return EntityForRelations::class;
    }

    protected function getDefaults(): array
    {
        return [];
    }
}
