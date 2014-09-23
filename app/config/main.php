<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return [
	'basePath'=>dirname(__DIR__.DS),
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>['log'],

	// autoloading model and component classes
	'import'=>[
		'application.models.*',
		'application.components.*',
	],

	'modules'=>require(__DIR__.DS.'modules.php'),

	// application components
	'components'=>[

		'user'=>[
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'loginUrl'=>'user/login',
		],

		// uncomment the following to enable URLs in path-format
		'urlManager'=>require(__DIR__.DS.'routes.php'),

		// uncomment the following to use a MySQL database
		'db'=>require(__DIR__.DS.'routes.php'),

		'errorHandler'=>[
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		],

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	],

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(__DIR__.DS.'params.php'),

];