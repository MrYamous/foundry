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
use Zenstruck\Foundry\Tests\Fixtures\Entity\Category;
use Zenstruck\Foundry\Tests\Fixtures\Service;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
final class CategoryServiceFactory extends ModelFactory
{
    public function __construct(private Service $service)
    {
        parent::__construct();
    }

    protected static function getClass(): string
    {
        return Category::class;
    }

    protected function getDefaults(): array
    {
        return ['name' => $this->service->name];
    }
}
