---
layout: post
title: "Design Patterns in PHP: Using Adapters"
published: true
keywords: adapters,design pattern,php,programming
description: ""
---

> An adapter helps two incompatible interfaces to work together. This is the
> real world definition for an adapter. The adapter design pattern is used when
> you want two different classes with incompatible interfaces to work together.

On the previous two posts we looked into Creational design patterns:

- [PHP
  Factories](http://coderoncode.com/2014/01/19/design-patterns-php-factories.html)
- [PHP
  Singletons](http://coderoncode.com/2014/01/27/design-patterns-php-singletons.html)

Recently I been working a lot with Magento on the workflow and techniques for my
new book, [Test Driven Magento Extension Development](https://leanpub.com/tdd-magento-extension) in an effort to make
Magento code more testable and less coupled I started looking into the use of adapters; so far with great results.

The Adapter pattern is a Structural pattern, structural Design Patterns are meant to  ease the design by identifying a simple way to manage relationships between entities.

You might also known the adapter pattern by the name of wrappers,
adapters/wrappers do exactly what the name implies; they encapsulate an existing
class while exposing the generic methods to the client classes.

For example, we can encapsulate all the logic for talking with a third party API
into an adapter class; this adapter class only exposes a set of standard generic methods that my client class will later reuse. 

One of the main advantages of using adapters this way is that if the API implementation ever changes, let's say from SOAP to REST or we want to replace the API with another service the only thing that we have to do is change the adapter implementation or replaced it altogether with a new adapter.

Let's look at a few code examples of how this could be done. 

<!-- Base Payment class Gist -->

So our payment class has our basic functionality, that you would expect from any payment gateway:

- authorize
- capture
- void
- cancel

Now, the payment method shouldn't be aware at all of the actual implementation only of how to interact with the rest of the system, like returning the transaction information.

In order to do that we need to abstract the logic into an adapter; but first first in order to guarantee that this adapter and any further iterations or alternate implementations will be usable by our payment method let's define an interface.

<!-- Adapter interface Gist -->



<!-- Base Soap Adapter class Gist -->
<!-- Base Rest class Gist -->
<!-- Base Interface class Gist -->

