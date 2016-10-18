#!/usr/bin/php
<?php
//autoloading and config
require_once '../vendor/autoload.php';
$config = include '../config.php';
$service = new \Compliance\Service($config);

//manual [u]rl
$getopt = getopt('u:');

if(!isset($getopt['u'])){
    echo "-u url" . PHP_EOL;
    return;
}

$url = $getopt['u'];
error_log('manually adding url: ' . $url);

//add to db
$service->addPage($url);
