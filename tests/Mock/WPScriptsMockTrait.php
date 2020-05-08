<?php

declare(strict_types=1);

/*
 * This file is part of Ymir WordPress plugin.
 *
 * (c) Carl Alexander <support@ymirapp.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ymir\Plugin\Tests\Mock;

use PHPUnit\Framework\MockObject\MockObject;

trait WPScriptsMockTrait
{
    /**
     * Creates a mock of a WP_Scripts object.
     */
    private function getWPScriptsMock(): MockObject
    {
        return $this->getMockBuilder(\WP_Scripts::class)
                    ->disableOriginalConstructor()
                    ->getMock();
    }
}
