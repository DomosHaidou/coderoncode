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

An important thing to notice is that multiple topologies can be used to learn the same set of data, and they are even likely to produce similar results; and as such there is not 'best' topology for a single neural network; that being said topology can greatly impact the amount of time required for a neural network to learn data as well its accuracy when classifying new data.

One a approach to topology selection is to simply make it a trial and error process, where we manually tweak the Neural network by modifying things like the number of hidden layers, connections between nodes, and so on. Taking this approach would limit us greatly as there are many possible permutations even for a simple neural network; to complicate matters even further, Neural networks are not limited to the relatively simple **Feed-Forward** layout we have seen before, to mention a few:

- Feed-forward 
- Recurrent 
- Long Short Term Memory 
- Jordan 
- Elman 
- Hopfield

![Network types - Source: turingfinance.com](http://www.turingfinance.com/wp-content/uploads/2014/04/Recurrent-Neural-Network-Architectures.png)

A bit overwellming ain't it? Fortunately, when it comes down to topology selection we can follow some basic rules that will help us to get started. Let's take a look at each layer:

### Input Layer

In the case of the Input layer we will always have a single layer arrangement for our input nodes, as for the number of nodes, that directly depends on the number of features in our dataset. 

It's also important to note that the process of selecting which data is used as inputs for our neural network is called feature selection, 