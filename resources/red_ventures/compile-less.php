#!/usr/bin/php -q
<?php
require '/usr/share/www/base_packages/lessphp/lessc.inc.php';

// LESS Compiler
$inputFile = "less/style_complete.less";
$outputFile = "css/style_complete.css";

$less = new lessc;

// create a new cache object, and compile
$buffer = $less->compileFile($inputFile);
$buffer = "/** Compiled @ " . date('Y-m-d H:i:s') . " **/" . PHP_EOL . $buffer;
file_put_contents($outputFile, $buffer);

