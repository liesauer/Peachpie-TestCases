<?php

namespace Test;

class A {
    public function fetch($content, $selector) {
        try {
            $document = new \HtmlAgilityPack\HtmlDocument();
            $document->LoadHtml($content);

            $nodes = \Fizzler\Systems\HtmlAgilityPack\HtmlNodeSelection::QuerySelectorAll($document->DocumentNode, $selector);
            if ($nodes) {
                foreach ($nodes as $node) {
                    var_dump($node);
                }
            }
        } catch (\Exception $e) { }
    }
}

$content = <<<'HTML'
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <p>hello</p>
</body>
</html>
HTML;

$selector = 'body>p';

(new A)->fetch($content, $selector);
