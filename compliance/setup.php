#!/usr/bin/php
<?php
//autoloading and config
require_once '../vendor/autoload.php';
$config = include '../config.php';
(new \Compliance\Service($config))->createTable();
