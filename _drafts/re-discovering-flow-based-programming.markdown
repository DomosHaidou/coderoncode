---
layout: post
title: (Re)discovering Flow Based Programming
description: "Building Data pipelines that don't suck with Elixir"

published: true
type: post
crosspost_to_medium: true

keywords:elixir, flow-based programming, software engineering, design patterns
categories:elixir
tag: article
---

Being a software developer has never seem as demanding as in 2017, in today's world developers are faced with increasing demand to build highly scalable and resilient applications while pressure with to deliver results faster and in shorter iterations (looking at you agile!). 

How many of you are haunted by phrases like, 'Just hack it together', 'We will fix after the go live', or 'It does not matter is just the MVP' any developer worth its salt will know that once adquired technical debt can take years to repay if ever. And what are we supposed to do? How are we supposed to manage complexity without slowing down without failing to deliver results. 

If you are anything like me (and hope you are since you are still reading), we always looking for a better way, to build and architect applications to avoid this pitfalls; be it agile or using ideas like dependency injection, microservices and so on; there is always a silver bullet around the corner. This blog post is not that, far from it; my goal is to introduce a new idea that many programmers are not familiar with, and by new I mean that has been around for the last 40 years. 

For the past year, I been looking and working on learning functional programming; in particular the Elixir and Erlang languages; through this learning process I stumbled into Flow-Based Programming; and while is no silver bullet I think this pattern can be extremely powerful on a wide set of modern use cases and applications and above it represents a neat and valuable change in paradigm and how we think about data.

## It's all about the Data 

<!-- Look for quote all about the data --> 

Think about the following for a second, no matter what kind of application you are building, no matter the architecture (serverless, MVC, etc) it's all about moving data from one point to the other and while doing so potentially applying transformations to that data. 

Let's say for example a REST api request, the flow can be described as follows:

- Parse request  
- Extract entities 
- Retrieve Data 
- Format Data 
- Return Data 

Most developers myself included, are trained to think in terms of state and objects; and while this is an useful abstraction with the evergrowing complexity of modern applications is hardly possible for a developer to follow the state of the application on his head; this of course causes more defects and harder time debugging it. 

On my introduction to Elixir there was a particular concept that really caught my attention, the idea of the |> (pipeline) operator, this operator let us chain multiple functions together one taking the output of the previous function as it input so for example:

```elixir
def handle_request(request) do 
    request 
    |> parse_request
    |> extract_enties
    |> get_database_records
    |> format_response
end
```

Each function on that pipeline doesn't need to know anything about the state of the application and is only concerned about doing a specific task and specific set of inputs, this to me is a extremely powerful and neat feature of functional programming; however I wanted more. 

And it was this search for more that I stumbled into Flow-Based Programming. 

## Flow-Based Programming

<!-- Insert Wikipedia description-->

My first introduction to FBP (Flow-Based Programming) was throuhg a library called [Flowex](), Flowex implements many of the ideas of FBP while taking advantage of Erlang BEAM processes. Let's take a closer look:

<!-- Insert basic diagram for flowex -->

The best analogy I have seen so far for Flow-Based Programming is thinking in terms of a assembly line in a factory, one in which we are moving data through this assembly line and each one of our function is doing something with that data in sequencial order. 

The core idea behind FBP is highly powerful, since as developers we can keep our focus on two main tasks:

- Architecting the Pipeline 
- Building the components of said pipelines

And since function use is just another link in the chain the overall complexity is greatly reduced, unlike larger more traditional applications. 

<!-- Braindump 

Flow-Based Programming is no Magic bullet and there are plenty of downfalls, however at this point I strongly believe that the benefits outweight any potential side effects.

Over the years, I've picked up a lot of methodologies or tools with the goal of making my software better, more reliable and more efficient, from TDD to DDD, microservices and serverless; we are bombarded with new methodologies, tools or paradigms that promise to solve every problem and making everything better.

Seasoned developers know better than anyone that this is far from true and that even the best tools can be twisted, misused and actually become detrimental — anyone that has worked with a developer that suffered from 'desing patternitis' has seen the results first hand. 

So why bring back an old idea, why even bother with a concept that has been around for decades now; after all if FBP is so great it would be mainstream by know, right? We'll as many things in life is not that simple; and while FBP has been around for years there are reasons why it never took of. 

Some of those reasons are technically sound some are more political in nature, in any case the fact that FBP is still around and being discussed 40 years after its inception should be indication enough that there might still be something to the idea. 

As developers we constantly struggle with complexity while forgetting what our actual job is, and that is not writing code. As developers our actual job to solve problems, think about it you don't go to a contract ask if can build you a house and then they immediatly start laying the foundation and rising walls, without even seeing the plans; on the other hand how often our initial reaction as software developers is jumping immediatly to a code editor, downloading a framework and so on. 

We don't think hard enough about the requirements, about the data, about how things are ought to work; we want to code. Now, don't get me wrong I completely understand why thats the case, I suffer from the same reaction, and who could blame us, coding is fun(yes for some people, codign is fun)  but we need to think more before press that first stroke. 




-->
