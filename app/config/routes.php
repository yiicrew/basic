<?php
return [
	'urlFormat'=>'path',
	'showScriptName'=>false,
	'rules'=>[

		'login' => 'user/login',
		'logout' => 'user/logout',
		
		// default route
		'<controller:\w+>/<id:\d+>'=>'<controller>/view',
		'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
		'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
	]
];