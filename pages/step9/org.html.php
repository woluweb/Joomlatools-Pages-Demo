---
route: myslug/[:slug]
collection:
    extend: articles
process:
  filters: highlight
---

<?= import('/partials/myorganizations/myarticle.html') ?>