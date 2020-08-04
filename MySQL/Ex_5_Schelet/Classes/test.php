<?php

$name = ['test1', 'test2'];
$type = ['INT', 'VARCHAR'];
$size = [11, 255];

$content = '';

foreach ($name as $key => $n) {
    $content .= sprintf('%s %s(%d), ', $n, $type[$key], $size[$key]);
}

echo $content;

$query = "sa ai o zi minunata,";

if ($query[strlen($query) - 1] = ",") {
    $query = chop($query, $query[strlen($query) - 1]);
}
echo $query;
