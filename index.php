<?php
include_once 'autoload.php';

use core\Application;
use Controllers\HeadController;
use Controllers\TopController;

$config=[
	'year'=>'',
	'term'=>'',
	'univcd'=>'',
	'cha'=>'',
];

$app=new Application(__DIR__,$config);

$app->setControlls([HeadController::class,'head']);
$app->setControlls([TopController::class,'top']);

$app->printContent();