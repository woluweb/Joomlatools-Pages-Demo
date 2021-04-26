---
title: A PHP page fetching external data from json file
summary: This page is rendered by the PHP engine.
---

<h2>Fetching data in json format</h2>
<p>directly from https://social.brussels/rest/organisation/13817</p>
<h3>In Dutch</h3>
<h4>->nameOfficialNl<h4>
<p><pre><code><?= data('https://social.brussels/rest/organisation/13817', '1day')->nameOfficialNl; ?></code></pre></p>
<h4>->legalStatus->labelNl<h4>
<p><pre><code><?= data('https://social.brussels/rest/organisation/13817', '1day')->legalStatus->labelNl; ?></code></pre></p>
<h3>In French</h3>
<h4>->nameOfficialFr<h4>
<p><pre><code><?= data('https://social.brussels/rest/organisation/13817', '1day')->nameOfficialFr; ?></code></pre></p>
<h4>->legalStatus->labelFr<h4>
<p><pre><code><?= data('https://social.brussels/rest/organisation/13817', '1day')->legalStatus->labelFr; ?></code></pre></p>
<h3>That was easy peasy!</h3>