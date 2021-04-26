---
collection:
    model: database?table=content
process:
    filters: highlight
---

<h2>Blog view using database?table=content</h2>

<? foreach(collection() as $article): ?>
   <? $article_images  = json_decode($article->images);?>
   <h3><b>Title:</b> <?= $article->title ?></h3>
   <p><img src="<?= $article_images->image_intro; ?>" alt="<?= $article_images->image_intro_alt; ?>" title="<?= $article_images->image_intro_caption; ?>"></p>
   <p><b>Published on:</b> <?= date($article->published_date, 'd M Y'); ?></p>
   <p><b>Category ID:</b> <?= $article->catid ?></p>
   <p><b>Introtext:</b> <?= $article->introtext ?></p>
<? endforeach; ?>

<hr>
<p>And here is a little <code>var_dump(collection())</code> so that you can see all what is immediately available in the array itself:</p>
<pre><code><?= var_dump(collection()); ?></code></pre>