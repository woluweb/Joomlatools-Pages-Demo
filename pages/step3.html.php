---
title: A PHP page
summary: This page is rendered by the PHP engine.
---

<h2><?= $title ?></h2>
<? $greeting = 'Hello World' ?>
<p><?= sprintf('%s from PHP', $greeting); ?></p>
<p>Today is <?= date('now','l h:i'); // Prints something like: Monday 10:56 ?></p>

<ktml:partial format="md">
**Why not** put some *markdown* written directly in our file?
</ktml:partial>