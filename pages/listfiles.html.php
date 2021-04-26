<ul>
<? foreach(collection('pages', ['level' => 1]) as $page): ?>
    <li><a href="<?= route($page) ?>"><?= $page->name ?></a></li>
<? endforeach ?>
</ul>