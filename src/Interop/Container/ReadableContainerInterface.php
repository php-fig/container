<?php
/**
 * @license http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

namespace Interop\Container;

use Interop\Container\Exception\NotFoundException;

/**
 * Describes the interface of a container that exposes methods to read its entries.
 */
interface ReadableContainerInterface
{
    /**
     * Finds an entry of the container by its identifier and returns it.
     *
     * @param string $identifier Identifier of the entry to look for.
     *
     * @throws NotFoundException No entry was found for this identifier.
     * @return mixed Entry.
     */
    public function get($identifier);

    /**
     * Returns true if the container can return an entry for the given identifier.
     * Returns false otherwise.
     *
     * @param string $identifier Identifier of the entry to look for.
     *
     * @return boolean
     */
    public function has($identifier);
}
