---
layout: post
title: "Magento in the Age of Functional Programming"
description: "Learn how to create functional code in Magento"

published: true
type: post
crosspost_to_medium: true

keywords: magento, functional programming, programming
categories: magento
tag: article
---

In the past couple years there has been a resurgence of **Functional programming** around several programming circles; 

**Functional Programming** has been gaining popularity on recent years. Haskell, Scala, Erlang, Clojure, Elixir, etc. you name it functional programming languages are here to stay; and with good reasons; there are many interesting features that make part of a functional languaguage, for example:

- Immutability 
- Functions are First Class Citizens 
- Referential transparency
- Recursion

Immutability and the lack of side effects make functional languages extremely well suited for development of high concurrency applications. Now, why is this relevant to the PHP community and more over to the Magento community? 

PHP is not a functional programming language, PHP is inherently imperative and as such it doesn't have many of the features that would constitude a functional programming; for example PHP lacks immutable value types.

That being said, PHP can support a basic style of functional programming, but before I show you why let's dig on the why; why should we care about creating magento code using a functional programming style.

## Why functional programming

So why go through all this trouble? First and foremost this style of programming tends to be considerable more legible as it tends to improve the level of abstraction used. Another advantage is that testing becomes considerable easier; all you need to do is pass the correct values and will always get the same result, no side effects.

Now what value is any of that to us Magento developers? Don't overstimate legibilitty and testing, take for example the following snippet of code:

<script src="https://gist.github.com/amacgregor/1c1ed1626d5804646139.js"></script>

Looks fun, doesn't it? Just take a look at the **_renderCategoryMenuItemHtml** method, try to follow that code just by reading it not very easy is it? Let's see if we can rewrite the previous code by using the following functional programming conventions:

- Avoid changing state - even within a function.
- Attempt to keep functions as short as possible.
- Remove control statements from the code.
- Do not use variable assignments.
