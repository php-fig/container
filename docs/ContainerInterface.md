Container Interface
===================

This document describes a common interface for dependency injection containers.

The goal set by `ContainerInterface` is to standardize how frameworks and libraries make use of a
container to obtain objects and parameters (called *entries* in the rest of this document).

Frameworks and CMSs that have custom needs MAY extend 
the interface for their own purpose, but SHOULD remain compatible with this document. 

The key words "MUST", "MUST NOT", "REQUIRED", "SHALL", "SHALL NOT", "SHOULD",
"SHOULD NOT", "RECOMMENDED", "MAY", and "OPTIONAL" in this document are to be
interpreted as described in [RFC 2119][].

The word `implementor` in this document is to be interpreted as someone
implementing the `ContainerInterface` in a depency injection-related library or framework.
Users of dependency injections containers (DIC) are refered to as `user`.

[RFC 2119]: http://tools.ietf.org/html/rfc2119

1. Specification
-----------------

### 1.1 Basics

- The `Interop\Container\ContainerInterface` exposes two methods : `get` and `has`.

- `get` takes one mandatory parameter: an entry identifier. It MUST be a string.
  A call to `get` returns an instance of an object, or throws an exception if the identifier
  is not known to the container. Two successive calls to `get` with the same
  identifier SHOULD return the same instance. However, depending on the `implementor`
  design and/or `user` configuration, different instances might be served, so
  `user` MUST NOT rely on getting the same instance on 2 successive calls.
  While `ContainerInterface` only defines one mandatory parameter in `get()`, implementations
  MAY accept additional optional parameters.

TODO: speak about return values.








  
- `has` takes one unique parameter: an entry identifier. It returns `true`
  if an instance identifier is known to the container and `false` if it is not.
  
### 1.2 Exceptions

Exceptions directly thrown by the container MUST implement the 
[`Interop\Container\Exception\ContainerException`](../src/Interop/Container/Exception/ContainerException.php).

A call to the `get` method with a non-existing id should throw a
[`Interop\Container\Exception\NotFoundException`](../src/Interop/Container/Exception/NotFoundException.php).

### 1.3 Additional features

**TODO**: Here, we should discuss the need for additional interfaces that might 
be added to the object implementing the `ContainerInterface`. Each interface
might add an additional feature.

### 1.3.1 Traversing instances

**TODO**: Works needs to be done before writing a first version of this.
The goal is for a DI container to return a list of all instances it has knowledge of.
Note: some DI Containers cannot do this easily, so this is why we put it in a 
separate interface.

What do we want? `ArrayAccess`? An interface with a `getAllInstances()` method?
An iterator?

### 1.3.2 Getting a new instance

**TODO**: is there a need for a *create* method that would create a new instance
instead of serving an old one? I'm not sure about this...

### 1.3.3 Chaining DI containers

**TODO**: is there a need for a *chain* method that would chain DI containers?
We might also want to consider the alternative of using a DI container aggregator
(see [Proposition 2 by Marco Pivetta here](step-c-inter-di-interop-meta.md)).

2. Package
----------

The interfaces and classes described as well as relevant exception classes
and a test suite to verify your implementation is provided as part of the
[psr/di](https://packagist.org/packages/psr/di) package. (**TODO**)

3. `Psr\DI\ContainerInterface`
------------------------------

```php
<?php
namespace Psr\DI;

/**
 * Describes a dependency injection container instance
 */
interface ContainerInterface
{
    /**
     * Returns an object associated to the identifier.
     * Returns null if no object is associated to this identifier.
     *
     * @param string $identifier The identifier MUST be a string.
     * @return object|null
     */
    public function get($identifier);

    /**
     * Returns true if an object associated to the identifier.
     * Returns false otherwise.
     *
     * @param string $identifier The identifier MUST be a string.
     * @return boolean
     */
    public function has($identifier);
}
```

