<?php

declare(strict_types=1);

/*
 * This file is part of Haiku.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Haiku\Tests\Unit;

use KodeKeep\Haiku\Haiku;
use KodeKeep\Haiku\Tests\TestCase;

/**
 * @covers \KodeKeep\Haiku\Haiku
 */
class HaikuTest extends TestCase
{
    /** @test */
    public function can_generate_a_name()
    {
        $this->assertIsString(Haiku::name());
    }

    /** @test */
    public function can_generate_a_name_with_a_token()
    {
        $this->assertIsString(Haiku::withToken());
    }
}
