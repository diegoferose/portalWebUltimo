<?php

use FStudio\myConfig as config;

$config = new config();

$config->setPath('C:/xampp/htdocs/portalWebUltimo/');
$config->setUrl('http://localhost/portalWebUltimo/web/');

$config->setDriver('mysql');
$config->setHost('localhost');
$config->setPort(3306);
$config->setDbName('portalwebturismobuga');
$config->setUser('root');
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
