<? $data = data('https://social.brussels/rest/organisation/'. $id, '1day') ?>
<h4>social.brussels data (using a reusable 'partial')</h4>
<ul>
   <li><b>id:</b> <?= $id ?></li>
   <li><b>legalStatus->labelFr:</b> <?= $data->legalStatus->labelFr ?></li>
   <li><b>legalStatus->labelNl:</b> <?= $data->legalStatus->labelNl ?></li>
</ul>