---
layout: post
title: "Why you should start using Quartz Composer"
---

I've recently started looking for the best way to prototype and animate interactions for web & iOS designs. Nowadays, "just" designing isn't enough, having nice, sleek animations and more importantly definining the right interactions is what really matters. 
I tried a bunch of tools (Marvel, flinto, FramerJS), but I ended casting my choice to the Origami / Quartz Composer tandem.
**What is Quartz Composer and Origami ?**
Origami is a free toolkit for Quartz Composer – created by the Facebook Design team. Some call Quartz a “visual programming language” or “patches and noodles.” Origami allegedly makes using Quartz easier. 
**Reasons to choose Origami and Quartz Composer over FramerJS**

+ QC has immediate visual feedback. You can get close with Framer by using auto refresh on save (for example with Cactus) but it's not the same.

+ QC has better performance in cases where it needs to do heavy computing for each frame (obj-c is faster then Javascript) but generally they are pretty close because the both use the same graphics acceleration.

+ QC has a nice set of tools built by Facebook to specifically do UI stuff.

+ QC is more extendable if you can code objective-c because it doesn't depend on the browser.

+ QC's visual programming is more "forgiving". One typo can break your javascript, QC doesn't have that, there is always some result.

