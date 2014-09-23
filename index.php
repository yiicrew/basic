<?php


// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
// shortcut for directory serparator
defined('DS') or define('DS', DIRECTORY_SEPARATOR);

// change the following paths if necessary
$yii=__DIR__.'/../vendor/yii.php';
$config=__DIR__.'/app/config/main.php';

// custom helpers
$helpers=__DIR__.'/app/helpers/helpers.php';
require($helpers);

require($yii);
Yii::createWebApplication($config)->run();