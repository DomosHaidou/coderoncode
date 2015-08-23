---
layout: post
title: "Building the MacxKit"
published: true
type: post

keywords: exocortex, information overload, microservices, technology, programming
description:
---

<!-- Recap of the previous post and explanation of the current concept -->

## Xcortex.io

Xcortex.io is the public face of this project, it can take the form of a website or a mobile app.

In order to make progress with this project I need to make small, fast iterations that validate or disprove the multiple concepts that this project assumes.

#### Alpha-0.0.1

**Objective:** Validate the concept of a micro-service architecture as a viable model instead of using a more traditional multi-agent model.

- Generate a few mock microservices in php that return dummy data
- Test the Chain of communitication
- Test what happens if the chain of communication is broken, due to latency
- Explore using a separate messaging layer, so the services don't communicate directly with each other.

###### Scenario 1: Direct Service to Service communication


###### Scenario 2: Messaging layer Service communication
