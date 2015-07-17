---
layout: post
title: "Functional Programming in PHP"
published: true
keywords:
description:
---

<!--
 Remember: this is a story, storyboarding for non fiction principles
 Story Template:
    - Set tone
    - Question posed
    - What's at stake
    - Catalyst or motivation
    - Skepticism or debate
    - Cross threshold (to Act 2)
    - back story and tools
    - Fun and games using tools
    - Stakes raised
    - Not out of woods
    - All is lost
    - Answer found! I rule!
    - Lessons learned
-->

# What is functional programming?

> ... a style of building the structure and elements of computer programs—that treats computation as the evaluation of mathematical functions and avoids changing-state and mutable data.
> [Functional Programming -- Wikipedia.org](https://en.wikipedia.org/wiki/Functional_programming)

The vast majority of developers are taught to think in an imperative manner, by this we mean that they are taught to program in way where their code changes the program state.

The functional programming paradigm in the other hand avoids state and mutable data, as well in imperative programming functions are threated as first-class citizens; by this we mean that we can use functions just as we use variables in imperative programming.

To simplify in fewer words, functional programming is **programming without any assignment of values** and you might be thinking, -- What the hell?! how is that even supposed to work, it sounds like dumb script running from top to bottom.

Don't make the mistake of confusing functional programming with procedural programming, there is a lot more to functional programming than just a series of dumb steps one after the other.

- But how does it work?
- How do you get anything done without assigning values?

Shockingly enough the answer is relatively simple, values can be passed from function to function as arguments and return values, even crazier functions can return functions that in turn can be passed as arguments of other functions.

Let that sink in for a second, functions that take and return functions instead of variables; properly used functional programming can be incredibly powerful. Since we are developer let's look at the following code example to understand the concept better:


#### Imperative example:

```php
<?php
$result = 0;
$values = array(1,2,3,4,5,6,7,8,9,10);

foreach($values as $key => $value)
{
  $result += $value;
}

$echo "Result: " . $result;
?>
```

#### Functional Example

```php
<?php
function sum_array($value, $array)
{
    $value += array_pop($array);
    if(!empty($array)) {
        $value = sum_array($value, $array);
    }
    return $value;
}

echo sum_array(0, range(1,10));
?>
```
