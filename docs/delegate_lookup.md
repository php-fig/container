# Delegate lookup feature Meta Document

## Introduction

This document describes the process and discussions that lead to the *delegate lookup* feature.
Its goal is to explain the reasons behind each decision.

## The problem

The [`ContainerInterface`](../src/Interop/Container/ContainerInterface.php) ([meta doc](ContainerInterface.md))
standardizes how frameworks and libraries make use of a container to obtain objects and parameters.

By standardizing such a behavior, frameworks and libraries using the `ContainerInterface`
could work with any compatible container.
That would allow end users to choose their own container based on their own preferences.

The `ContainerInterface` is also enough if we want to have several containers side-by-side in the same
application. For instance, this is what the [CompositeContainer](https://github.com/jeremeamia/acclimate-container/blob/master/src/CompositeContainer.php) 
class of [Acclimate](https://github.com/jeremeamia/acclimate-container) is designed for:

[Side by side containers](images/side_by_side_containers.png)

However, an instance in container 1 cannot reference an instance in container 2.

It would be better if an instance of container 1 could reference an instance in container 2,
and the opposite should be true. 

[Interoperating containers](images/interoperating_containers.png)

In the sample above, entry 1 in container 1 is referencing entry 4 in container 2.

## Feature

The goal of the *delegate lookup* feature is to allow several containers to share entries.

A container implementing this feature:

- should implement the `ContainerInterface`
- should provide a way to register a *delegate container* (using a constructor parameter, or a setter, or any
possible way). The *delegate container* must implement the `ContainerInterface`

Calls to the `get` method should only return an entry if the entry is part of the container.
If the entry is not part of the container, an exception should be thrown (as required in the `ContainerInterface`).

Calls to the `has` method should only return *true* if the entry is part of the container.
If the entry is not part of the container, *false* should be returned.
 
Finally, the important part: if the entry we are fetching has dependencies that require performing a lookup,
**instead** of perfoming the lookup in the container, the lookup is performed on the *delegate container*.

Warning! The lookup should be only performed on the *delegate container*, never on the container itself.
The *delegate container* will usually be a composite container that will in turn forward the lookup calls
to the containers it contains (and therefore back to the initial container)
