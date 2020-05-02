<?php

require_once 'lib/Mustache/Autoloader.php';

Mustache_Autoloader::register();
$mustache = new Mustache_Engine([
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/template')
]);
