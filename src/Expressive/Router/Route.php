<?php

/**
 * @see       https://github.com/xerron/phalcon-expressive for the canonical source repository
 * @copyright Copyright (c) 2016-2017 U-w-U Digital Marketing Perú Inc. (http://www.u-w-u.com)
 * @license   https://github.com/xerron/phalcon-expressive/blob/master/LICENSE.md New BSD License
 */

namespace Phalcon\Expressive\Router;

class Route extends \Phalcon\Mvc\Router\Route
{

    /**
     * @var String
     */
    protected $options;

    public function setOptions(array $options)
    {
        $this->options = $options;

        return $this;
    }

    public function getOptions(array $options)
    {
        return $this->options;
    }
}
