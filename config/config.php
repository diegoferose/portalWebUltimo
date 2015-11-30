<?php

use FStudio\myConfig as config;

$config = new config();

$config->setPath('C:/xampp/htdocs/portalFinal/');
$config->setUrl('http://localhost/portalFinal/web/');

$config->setDriver('mysql');
$config->setHost('localhost');
$config->setPort(3306);
$config->setDbName('tpsbuga');
$config->setUser('');
$config->setPassword(null);
$config->setDsn(
        $config->getDriver()
        . ':host=' . $config->getHost()
        . ';port=' . $config->getPort()
        . ';dbname=' . $config->getDbName()
);

$config->setSessionName('FStudio');

$config->setDefaultModule('portal');
$config->setDefaultAction('index');

//$config->setPlugins(array(
//    'fsEjemplo1Plugin',
//    'fsEjemplo2Plugin',
//));
