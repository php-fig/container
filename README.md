# Containers interoperability

The "container-interop" project tries to bring interoperability between DI containers through discussions and trial.

The work done here is not endorsed by the [PHP-FIG](http://www.php-fig.org/), but we
adhere to its spirit and hope this project will pave the way for one or several PSRs.

## Using

You can install this package through Composer:

```json
{
    "require": {
        "container-interop/container-interop": "1.*"
    }
}
```

Bear in mind that minor versions (e.g. 1.*) have no BC breaks, however major versions do have BC breaks.

## Available interfaces

*None*

## Interfaces in the works

- [`ReadableContainerInterface`](src/Interop/Container/ReadableContainerInterface.php): Join [the discussions](https://github.com/container-interop/container-interop/issues?labels=ReadableContainerInterface&page=1&state=open)

## Workflow

Everyone is welcome to join and contribute.

The general workflow looks like this:

- someone opens a discussion (GitHub issue) to suggest an interface
- feedback is gathered
- the interface is added to a development branch
- we release alpha versions so that the interface can be experimented with
- discussions and edits ensue until the interface is deemed stable by a general consensus
- a new minor version of the package is released

We try to not break BC by creating new interfaces instead of editing existing ones.

While we now work on interfaces, we are open to anything that might help towards interoperability, may that be
code, best practices, …
