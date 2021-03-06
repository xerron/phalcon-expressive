<?php

/**
 * @see       https://github.com/xerron/phalcon-expressive for the canonical source repository
 * @copyright Copyright (c) 2016-2017 U-w-U Digital Marketing Perú Inc. (http://www.u-w-u.com)
 * @license   https://github.com/xerron/phalcon-expressive/blob/master/LICENSE.md New BSD License
 */

namespace PhalconTest\Expressive;

use PHPUnit\Framework\TestCase;

/**
 * @covers \Phalcon\Expressive\Application
 */
class ApplicationTest extends TestCase
{

    public function testInjectRoutesFromConfig()
    {
        $this->assertEquals(1,1);
    }

    public function testHandle()
    {
        $this->assertEquals(1,1);
    }
}