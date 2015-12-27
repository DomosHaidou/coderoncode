---
layout: post
title: "Using Dependency Injection in Magento 1.x"
published: true
type: post

keywords:
description: ""
categories:
tag: article
---

After reading the title you might be thinking ***Dependency Injection in Magento1.x?! That's impossible Magento1.x uses the god object, it's tightly coupled, it's not testable! What did Allan smoke this time?!***

Well, using **Dependency Injection** is not only possible but easy to do -- no comment on my smoking habits -- and something I would encourage Magento developers to start doing as part of their regular coding practices.

I was first introduced to this method by [James Cowie]() when learning **PHPspec** and looking for a way to work around the tight coupling of code in the Magento core.

Let's take as an example the following piece of code:

<!-- Insert code example that shows and object instantiating another Magento Object -->

As you can see we are calling ```Mage::getModel()``` inside our object, this is bad since our class <!-- INSERT CLASS NAME --> now has the responsibility of instantiating a new object; we are effectively breaking the single responsibility principle.

<!-- Make reference to alan storm articles 2.x -->
<!-- Give credit to James Cowie -->
<!-- Explaining Dependency Injection -->
