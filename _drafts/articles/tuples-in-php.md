---
layout: post
title: "Tuples in PHP"
published: true
type: post

design: keywords pattern,php,programming,tuples,coding,computer science
description: ""

gradient: 		1

author: 		Allan MacGregor
bio: 			MCD+, Author, Mad Scientist Developer, Lead Magento Developer @demacmedia.
twitter: 		"http://twitter.com/allanmacgregor"
github: 		"http://github.com/amacgregor/"
google: 		"https://plus.google.com/+AllanMacGregor?rel=author"
linkedin: 		"http://ca.linkedin.com/in/allanmacgregor"
rss: 			"http://feeds.feedburner.com/CoderOnCode"
tag: article
---

Recently I been exploring different languages like Scala, Hack and Python, these languages have something particular in common and that is a tuples.

-=excerpt=-


## What are Tuples?

If you are solely a php developer you are probably not familar with the concept of tuples; there are multiple definitions that we can reference to understand tuples better:

> A tuple in Python is much like a list except that it is immutable (unchangeable) once created, and hashable and thus suitable as a key in a dictionary.

Or a more generic definition:

> In functional languages, tuples are a data object containing two or more components. Also known as a product type or pair, triple, quad, etc. 

I prefer to think of Tuples as immutable arrays, in PHP arrays elements can be added and removed at any point in time; with tuples after they are initialized they can't be changed.

{% include block-note.html content="However, the values inside a tuple are mutable, is only the structure of tuple that is immutable." %}

Properly used tuples are a powerful and extremely useful, for example:

- When returning mutiple values from a method is required.
- When thread safety is required, since a known immutable object is inherently more thread safe than mutable one.
- When we need to group multiple values together that don't necesarily share the same type.

## In the PHP world...

Sadly PHP doesn't not have a build-in Tuple data type that we can use, actually the only real data structure that php provides and that is used for almost everything is the array.

>An array in PHP is actually an ordered map. A map is a type that associates values to keys. This type is optimized for several different uses; it can be treated as an array, list (vector), hash table (an implementation of a map), dictionary, collection, stack, queue, and probably more. As array values can be other arrays, trees and multidimensional arrays are also possible.

