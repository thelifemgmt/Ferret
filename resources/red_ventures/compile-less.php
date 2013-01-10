#!/usr/bin/php -q
<?php
require '/usr/share/www/base_packages/lessphp/lessc.inc.php';

// LESS Compiler
$inputFile = "less/ferret.less";
$outputFile = "css/ferret.css";

$less = new lessc;

// create a new cache object, and compile
$buffer = $less->compileFile($inputFile);
$buffer = "/** Compiled @ " . date('Y-m-d H:i:s') . " **/" . PHP_EOL . $buffer;
file_put_contents($outputFile, $buffer);

