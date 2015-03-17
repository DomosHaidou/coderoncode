---
layout: post
title: "Testing Tuesday: Magento Test Doubles"
published: true
keywords:
description:
---

{% excerpt %}

{% endexcerpt %}

> In automated unit testing, it may be necessary to use objects or procedures
> that look and behave like their release-intended counterparts, but are
> actually simplified versions that reduce the complexity and facilitate
> testing. A test double is a generic (meta) term used for these objects or
> procedures.

One of the big obstacles that has prevent Magento developers from writing tests
against their extensions is the untestability of the core, no better example
than Magento's God class.

The Magento god class is used for all sort of operations, from model factories
to retrieving configuration from the database. Virtually every single class in
the Magento core and in most extensions will depend on at least a few calls to
this god class; making that resulting code tightly coupled with the core,
highly dependant on the database state and as result, untestable.

> A mock object is a very powerful tool, providing two major benefits:
> isolation and introspection. [**Uncle
> Bob**](http://blog.8thlight.com/uncle-bob/2014/05/10/WhenToMock.html)

This was a particular problem that I started running when working with PHPSpec
and Magento, errors will ocurr resulting in broken tests and me having to work
around that particular code.

In most cases I was able to make the code work, making somewhat testable but it
felt like I was working against the framework instead of working with it.
Determined to find a better way of solving this issue I started talking with
developers and colleges, one solution that caught my eye was using and adapter
class for Magento, so any calls to **Mage::** would contained into this class
which could later mock.

Now, while I do really like this approach it does havea few disadvantages;
first of all we are putting all the 'untestable code' into a single class and
reusing it around the application, the second problem is that as you probably
noticed we are instanting the adapter class directly inside the constructor.

There reason the constructor code is build that way is to provide a viable way
to inject a mocked adapter class instance; however directly instantiating
classes goes against the Magento design patterns.

Furthermore the adapter pattern might not always be a viable alternative,
developers will not always be able to refactor the coder or use the pattern for
whatever reasons. This should not be a reason for 


<!-- Insert Quotation -->
