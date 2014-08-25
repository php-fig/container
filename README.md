# Container Interoperability

[![Latest Stable Version](https://poser.pugx.org/container-interop/container-interop/v/stable.png)](https://packagist.org/packages/container-interop/container-interop)

The "container-interop" project attempts to achieve the interoperability of *container* objects (service locators,
dependency injection containers, etc.) through discussions and trial, and by establishing common interfaces.

If PHP projects that provide container implementations begin to adopt these common interfaces, then PHP
applications and projects that use containers can depend on the common interfaces instead of specific
implementations. This facilitates a high-level of interoperability and flexibility that allows users to consume
*any* container implementation that can be adapted to these interfaces.

The work done in this project is not officially endorsed by the [PHP-FIG](http://www.php-fig.org/), but it is being
worked on by members of PHP-FIG and other good developers. We adhere to the spirit and ideals of PHP-FIG, and hope
this project will pave the way for one or more future PSRs.

## Installation

You can install this package through Composer:

```json
{
    "require": {
        "container-interop/container-interop": "~1.0"
    }
}
```

The packages adheres to the [SemVer](http://semver.org/) specification, and there will be full backward compatibility
between minor versions.

## Interfaces

### Available

- [`ContainerInterface`](src/Interop/Container/ContainerInterface.php).
[Meta Document](docs/ContainerInterface.md).
Describes the interface of a container that exposes methods to read its entries.

### Proposed

No new interface is currently discussed.

##Recommended features

- Delegate lookups
[Meta Document](docs/delegate_lookup.md).
Describes the ability for a container to delegate the lookup of its dependencies to a third-party container. This 
feature is important to allow several containers working together in a single application.

## Compatible projects

- [Acclimate](https://github.com/jeremeamia/acclimate-container)
- [dcp-di](https://github.com/estelsmith/dcp-di)
- [Mouf](https://mouf-php.com)
- [Njasm Container](https://github.com/njasm/container)
- [PHP-DI](http://php-di.org)
- [PimpleInterop](https://github.com/moufmouf/pimple-interop)
- [XStatic](https://github.com/jeremeamia/xstatic)

### Projects providing the *delegate lookup* feature

- [PHP-DI](http://php-di.org)
- [PimpleInterop](https://github.com/moufmouf/pimple-interop)

## Workflow

Everyone is welcome to join and contribute.

The general workflow looks like this:

1. Someone opens a discussion (GitHub issue) to suggest an interface
1. Feedback is gathered
1. The interface is added to a development branch
1. We release alpha versions so that the interface can be experimented with
1. Discussions and edits ensue until the interface is deemed stable by a general consensus
1. A new minor version of the package is released

We try to not break BC by creating new interfaces instead of editing existing ones.

While we currently work on interfaces, we are open to anything that might help towards interoperability, may that
be code, best practices, etc.
