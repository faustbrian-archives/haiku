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

namespace KodeKeep\Haiku\Tests\Analysis;

use GrahamCampbell\Analyzer\AnalysisTrait;
use KodeKeep\Haiku\Tests\TestCase;

/**
 * @coversNothing
 */
class AnalysisTest extends TestCase
{
    use AnalysisTrait;

    public function getPaths(): array
    {
        return [
            realpath(__DIR__.'/../../src'),
            realpath(__DIR__),
        ];
    }
}
