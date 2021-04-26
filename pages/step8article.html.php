---
route: blabla/[:slug]
collection:
    extend: articles
process:
  filters: highlight
---

<h2>Article View override done with Pages (in one file)</h2>

<article>
   <h3><?= collection()->title ?></h3>
   <p><?= collection()->text ?></p>
   <?= import('/partials/embeds/socialbrussels.html', ['id' => collection()->fields->socialbrusselsid->value]) ?>
</article>

<h3>A var_dump of all Custom Fields with <code>var_dump(collection()->fields)</code></h3>
<pre><code><?= var_dump(collection()->fields); ?></code></pre>