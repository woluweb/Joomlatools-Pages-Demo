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

<h2>Blog view using ext:joomla.model.articles and links with the Pages router (with partials)</h2>

<?= import('/partials/myorganizations/liststep9.html') ?>