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

use Zenstruck\Foundry\Tests\Fixtures\Entity\SpecificPost;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
class SpecificPostFactory extends PostFactory
{
    protected static function getClass(): string
    {
        return SpecificPost::class;
    }
}
