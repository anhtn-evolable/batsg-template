<?php
$cache = TRUE;
return [
	'db' => [
		'class' => 'yii\db\Connection',
		'dsn' => 'mysql:host=localhost;dbname=yii2basic',
		'username' => 'root',
		'password' => '',
		'charset' => 'utf8',
		'enableSchemaCache' => $cache,
		'schemaCacheDuration' => 3600, // Duration of schema cache.
		'schemaCache' => 'cache', // Name of the cache component used to store schema information
    ],
	'log' => [
		'targets' => [
			[
				'class' => 'yii\log\FileTarget',
				'levels' => ['error', 'warning', 'info', 'trace'],
				'logVars' => [],
				'except' => ['yii\db\*'],
			],
			[
				'class' => 'yii\log\FileTarget',
				'levels' => ['error', 'warning', 'info', 'trace'],
				'logVars' => [],
				'categories' => ['yii\db\*'],
				'logFile' => '@app/runtime/logs/sql.log',
			],
		],
	],
    'params' => [
    ],
];