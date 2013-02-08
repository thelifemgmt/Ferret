#!/usr/bin/php -q
<?php
require '/usr/share/www/base_packages/lessphp/lessc.inc.php';

// LESS Compiler
$inputFile = "less/ferret.less";
$outputFile = "css/ferret.css";


// This is the Auto Compile version that only compiles when there are changes to the LESS files
// To make this work, you need to include the auto-compile trigger in your Header file
// Otherwise you will have to manually compile by typing, 'php compile-less.php' in terminal while in the data folder
function autoCompileLess($inputFile, $outputFile) {
  // load the cache
  $cacheFile = $inputFile.".cache";

  if (file_exists($cacheFile)) {
    $cache = unserialize(file_get_contents($cacheFile));
  } else {
    $cache = $inputFile;
  }

  $less = new lessc;
  $newCache = $less->cachedCompile($cache);

  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
    file_put_contents($cacheFile, serialize($newCache));
    file_put_contents($outputFile, $newCache['compiled']);
  }
}

autoCompileLess($inputFile, $outputFile);