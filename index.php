<?php

if (!defined('ROOT')) {
    define('ROOT', __DIR__);
}

include_once 'vendor/autoload.php';

$mysql = [
    'dsn' => 'mysql:dbname=ztf;host=localhost',
    'userName' => 'root',
    'password' => '9205655532',
    'options' => [
        'charset' => 'UTF8',
        'port' => 3306
    ]
];

$pgsql = [
    'dsn' => 'pgsql:dbname=ztf;host=localhost',
    'userName' => 'root',
    'password' => '9205655532',
    'options' => [
        'charset' => 'UTF8',
    ]
];

$settings = new Settings\Settings();

$settings->set('mysql', $mysql)->set('pgsql', $pgsql);

$pg = $settings->get('pgsql');
$pg->add('port', 36087);

$my = $settings->get('mysql');

$data = serialize($my);

echo $my;
