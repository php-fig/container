<?php

namespace Psr\Container;

use Throwable;

/**
 * Base interface representing a generic exception in a container.
 */
if (interface_exists(Throwable::class)) {
    interface ContainerExceptionInterface extends Throwable
    {
    }
} else {
    interface ContainerExceptionInterface
    {
    }
}
