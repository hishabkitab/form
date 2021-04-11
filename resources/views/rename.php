<?php
$dir = 'normal/';
$files = scandir($dir);

foreach ($files as $file) {
    if ($file == '.' || $file == '..') continue;
    else {
        $nfile = str_replace('normal_', '', $file);
        rename($dir . $file, $dir . $nfile);
    }
}
