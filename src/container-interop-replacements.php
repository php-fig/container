<?php

declare(strict_types=1);

namespace Psr\Container;

use Interop\Container\Containerinterface as InteropContainerInterface;
use Interop\Container\Exception\ContainerException as InteropContainerException;
use Interop\Container\Exception\NotFoundException as InteropNotFoundException;

class_alias(ContainerInterface::class, InteropContainerInterface::class);
class_alias(ContainerExceptionInterface::class, InteropContainerException::class);
class_alias(NotFoundExceptionInterface::class, InteropNotFoundException::class);
