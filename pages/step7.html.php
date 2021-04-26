---
collection:
    model: ext:joomla.model.articles
    state:
        published: 1
        category: [organizations]
        sort: date
        order: asc
process:
    filters: highlight
---

<h2>Blog view using ext:joomla.model.articles and links with the Joomla router (and partials for Custom Fields)</h2>

<style>
ul.pages-cards {
   display: grid;
   grid-template-columns: repeat(3, 1fr);
   grid-gap: 20px;
   margin-left: 0; /* otherwise we have the natural left margin of the Unordered List */
}
ul.pages-cards > li {
   display: flex;
   flex-direction: column;
   padding: 10px;
   border: 1px solid lightgray;
   box-shadow: 3px 3px 2px 1px rgba(0, 0, 0, 0.2);
}
</style>

<ul class="pages-cards">
   <? foreach(collection() as $article): ?>
      <li>
         <h3><a href="<?= $article->getRoute() ?>"><?= $article->title; ?></a></h3>
         <p><img src="<?= $article->image->url; ?>" alt="<?= $article->image->alt; ?>" title="<?= $article->image->caption; ?>"></p>
         <p><b>Category: <?= $article->category->title; ?></b></p>
         <p><small><?= 'This article was published on ' . date($article->published_date, 'd M Y') . ' for the demo'; ?></small></p>
         <p><b>Excerpt (ex-introtext):</b></p><?= $article->excerpt ?>
         <p><b>Text (ex-fulltext):</b></p><?= $article->text ?>
         <p><b>(ex-introtext + ex-fulltext):</b></p><?= $article ?>
		 <p><?= import('/partials/embeds/socialbrussels.html', ['id' => $article->fields->socialbrusselsid->value]) ?></p>
		 <p><?= import('/partials/embeds/url.html', ['url' => $article->fields->youtube->value]) ?></p>
         <p><?= import('/partials/embeds/youtube.html', ['url' => $article->fields->youtube->value]) ?></p>
      </li>
   <? endforeach ?>
</ul>

<hr>
<p>And here is a little <code>var_dump(collection())</code> so that you can see all what is immediately available in the array itself:</p>
<pre><code><?= var_dump(collection()); ?></code></pre>