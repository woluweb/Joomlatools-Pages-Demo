---
process:
    filters: [highlight]
---

<h2>Source code for each page of the present demo site</h2>

<ul>
    <li><a href="#step1">Step1</a></li>
	<li><a href="#step2">Step2</a></li>
	<li><a href="#step3">Step3</a></li>
	<li><a href="#step4">Step4</a></li>
	<li><a href="#step5">Step5</a></li>
	<li><a href="#step6">Step6</a></li>
	<li><a href="#step7">Step7</a></li>
	<li><a href="#step7articleembedsocialbrussels">Step7 Article embed social.brussels</a></li>
	<li><a href="#step7articleembedurl">Step7 Article embed URL</a></li>
	<li><a href="#step7articleembedyoutube">Step7 Article embed YouTube</a></li>
	<li><a href="#step8blog">Step8 Blog</a></li>
	<li><a href="#step8article">Step8 Article</a></li>
	<li><a href="#step9blog">Step9 Blog</a></li>
	<li><a href="#step9blogpartial">Step9 Blog partial</a></li>
	<li><a href="#step9article">Step9 Article</a></li>
	<li><a href="#step9articlepartial">Step9 Article partial</a></li>
	<li><a href="#decoration">Decoration</a></li>
</ul>

<h3 id="step1">Step1</h3>
<?= source('step1') ?>
<h3 id="step2">Step2</h3>
<?= source('step2') ?>
<h3 id="step3">Step3</h3>
<?= source('step3') ?>
<h3 id="step4">Step4</h3>
<?= source('step4') ?>
<h3 id="step5">Step5</h3>
<?= source('step5') ?>
<h3 id="step6">Step6</h3>
<?= source('step6') ?>
<h3 id="step7">Step7</h3>
<?= source('step7') ?>
<h3 id="step7articleembedsocialbrussels">Step7 Article embed social.brussels</h3>
<?= source('../partials/embeds/socialbrussels') ?>
<h3 id="step7articleembedurl">Step7 Article embed URL</h3>
<?= source('../partials/embeds/youtube') ?>
<h3 id="step7articleembedyoutube">Step7 Article embed YouTube</h3>
<?= source('../partials/embeds/youtube') ?>
<h3 id="step8blog">Step8 Blog</h3>
<?= source('step8') ?>
<h3 id="step8article">Step8 Article</h3>
<?= source('step8article') ?>
<h3 id="step9blog">Step9 Blog</h3>
<?= source('step9/index') ?>
<!-- note: actually the file is not step9.html.php but step8/index.html.php. Still it works fine to call it with only step8 -->
<h3 id="step9blogpartial">Step9 Blog partial</h3>
<?= source('../partials/myorganizations/liststep9') ?>
<h3 id="step9article">Step9 Article</h3>
<?= source('step9/org') ?>
<h3 id="step9articlepartial">Step9 Article partial</h3>
<?= source('../partials/myorganizations/myarticle') ?>
<h3 id="decoration">Decoration</h3>
<?= source('decoration') ?>