<p><small>Of course, in a real site, when using Custom Fields we could filter by Category since not all CF are assigned to all Categories for example)</small></p>
<ul>
   <? foreach(collection() as $article): ?>
      <li>
         <a href="<?= route('step9/org', ['slug' => $article->slug]) ?>"><?= $article->title; ?></a>
      </li>
   <? endforeach ?>
</ul>
<hr>
<p>And here is a little <code>var_dump(collection())</code> so that you can see all what is immediately available in the array itself:</p>
<pre><code><?= var_dump(collection()); ?></code></pre>
