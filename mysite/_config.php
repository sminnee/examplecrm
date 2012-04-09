<?php

global $project;
$project = 'mysite';

global $database;
$database = '';

require_once('conf/ConfigureFromEnv.php');

MySQLDatabase::set_connection_charset('utf8');
