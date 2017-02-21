---
layout: post
title: "Neural Networks Without a PhD: Topologies"
description: "A series focused on preseting Neural Networks and the related concepts in layman's terms, that is to say without specialized knowledge in math or machine learning."

published: true
type: post
crosspost_to_medium: true

keywords: machine learning, artificial intelligence, neural networks
categories: machine-learning
tag: article
---

> Topology of a neural network refers to the way the Neurons are connected, and it is an important factor in network functioning and learning. A common topology in unsupervised learning is a direct mapping of inputs to a collection of units that represents categories (e.g., Self-organizing maps). 
> -- [Springer](http://link.springer.com/referenceworkentry/10.1007%2F978-0-387-30164-8_837)

In our previous post we learned about the components that form a neural network:

- Input Nodes
- Neurons
- Output Nodes

as well that those elements will be organized in the following layers:

- Input Layer
- Hidden Layers
- Output Layer

However, it still not very clear what the process for organizing and connecting those neural networks is; how do we determine how many hidden layers we need to create? How do we connect those neurons to the inputs, outputs and to each other? How do we know how many output nodes we need to create?

## How to organize our Neural Network

What we need is a way to represent how neurons are connected in order to form a network, a Neural Network Topology. The topology of a neural network plays an essential role in its function and performance. 
