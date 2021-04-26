
<?php
return function($page)
{
    $file   = $this->getObject('template.locator.factory')->locate('page://pages/'.$page);
    $source = file_get_contents($file);

    $parts = preg_split('#^\s*(---\s*[\s\S]*\s*---)\s*(.*)$#miU', $source, 2, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

    $html = '';
    if(!empty($parts[0]))
    {
        $code = trim(htmlentities($parts[0]));
$html .= <<<CODE
<pre>
    <code>$code</code>
</pre>
CODE;

    }

    if(!empty($parts[1]))
    {
        $code = trim(htmlentities($parts[1]));
$html .= <<<CODE
<pre>
    <code>$code</code>
</pre>
CODE;

    }

    return $html;
};
