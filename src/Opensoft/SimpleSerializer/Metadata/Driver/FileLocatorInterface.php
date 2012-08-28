<?php

/**
 * This file is part of the Simple Serializer.
 *
 * Copyright (c) 2012 Farheap Solutions (http://www.farheap.com)
 *
 * For the full copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */

namespace Opensoft\SimpleSerializer\Metadata\Driver;

/**
 * @author Dmitry Petrov <dmitry.petrov@opensoftdev.ru>
 */
interface FileLocatorInterface
{
    /**
     * @param string $className
     * @param string $extension
     * @return null|string
     */
    public function findFileForClass($className, $extension);
}