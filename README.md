# Container Interoperability

[![Latest Stable Version](https://poser.pugx.org/container-interop/container-interop/v/stable.png)](https://packagist.org/packages/container-interop/container-interop)
[![Total Downloads](https://poser.pugx.org/container-interop/container-interop/downloads.svg)](https://packagist.org/packages/container-interop/container-interop)

*container-interop* tries to identify and standardize features in *container* objects (service locators,
dependency injection containers, etc.) to achieve interoperability.

Through discussions and trials, we try to create a standard, made of common interfaces but also recommendations.

If PHP projects that provide container implementations begin to adopt these common standards, then PHP
applications and projects that use containers can depend on the common interfaces instead of specific
implementations. This facilitates a high-level of interoperability and flexibility that allows users to consume
*any* container implementation that can be adapted to these interfaces.

The work done in this project is not officially endorsed by the [PHP-FIG](http://www.php-fig.org/), but it is being
worked on by members of PHP-FIG and other good developers. We adhere to the spirit and ideals of PHP-FIG, and hope
this project will pave the way for one or more future PSRs.


## Installation

You can install this package through Composer:

```json
composer require container-interop/container-interop
```

The packages adheres to the [SemVer](http://semver.org/) specification, and there will be full backward compatibility
between minor versions.

## Standards

### Available

- [`ContainerInterface`](src/Interop/Container/ContainerInterface.php).
[Description](docs/ContainerInterface.md) [Meta Document](docs/ContainerInterface-meta.md).
Describes the interface of a container that exposes methods to read its entries.
- [*Delegate lookup feature*](docs/Delegate-lookup.md).
[Meta Document](docs/Delegate-lookup-meta.md).
Describes the ability for a container to delegate the lookup of its dependencies to a third-party container. This
feature lets several containers work together in a single application.

### Proposed

View open [request for comments](https://github.com/container-interop/container-interop/labels/RFC)

## Compatible projects

### Projects implementing `ContainerInterface`

- [Acclimate](https://github.com/jeremeamia/acclimate-container): Adapters for
  Aura.Di, Laravel, Nette DI, Pimple, Symfony DI, ZF2 Service manager, ZF2
  Dependency injection and any container using `ArrayAccess`
- [Aura.Di](http://auraphp.com/packages/Aura.Di/)
- [dcp-di](https://github.com/estelsmith/dcp-di)
- [Disco](https://github.com/bitexpert/disco)
- [League/Container](http://container.thephpleague.com/)
- [Mouf](http://mouf-php.com)
- [Njasm Container](https://github.com/njasm/container)
- [PHP-DI](http://php-di.org)
- [PimpleInterop](https://github.com/moufmouf/pimple-interop)
- [Pimple3-ContainerInterop](https://github.com/Sam-Burns/pimple3-containerinterop) (using Pimple v3)
- [SitePoint Container](https://github.com/sitepoint/Container)
- [Ultra-Lite Container](https://github.com/ultra-lite/container)
- [Unbox](https://github.com/mindplay-dk/unbox)
- [XStatic](https://github.com/jeremeamia/xstatic)
- [Zend\ServiceManager](https://github.com/zendframework/zend-servicemanager)

### Projects implementing the *delegate lookup* feature

- [League/Container](http://container.thephpleague.com/)
- [Mouf](http://mouf-php.com)
- [PHP-DI](http://php-di.org)
- [PimpleInterop](https://github.com/moufmouf/pimple-interop)
- [Ultra-Lite Container](https://github.com/ultra-lite/container)

### Middlewares implementing `ContainerInterface`

- [Alias-Container](https://github.com/thecodingmachine/alias-container): add
  aliases support to any container
- [Prefixer-Container](https://github.com/thecodingmachine/prefixer-container):
  dynamically prefix identifiers

### Projects using `ContainerInterface`

- [Adroit](https://github.com/bitexpert/adroit)
- [interop.silex.di](https://github.com/thecodingmachine/interop.silex.di): an
  extension to [Silex](http://silex.sensiolabs.org/) that adds support for any
  *container-interop* compatible container
- [prooph components](http://getprooph.org/): CQRS + ES Infrastructure
- [Prophiler](https://github.com/fabfuel/prophiler)
- [Slim v3](https://github.com/slimphp/Slim)
- [Woohoo Labs. Harmony](https://github.com/woohoolabs/harmony): a flexible
  micro-framework
- [zend-expressive](https://github.com/zendframework/zend-expressive)
- [blast-facades](https://github.com/phpthinktank/blast-facades): Minimize complexity and represent dependencies as facades.
- [mindplay/walkway](https://github.com/mindplay-dk/walkway): a modular request router.
- [mindplay/middleman](https://github.com/mindplay-dk/middleman): minimalist PSR-7 middleware dispatcher.


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
