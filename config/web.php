<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'AHOMoVG8yrOmBv_X38K7Bsol0yM32oxw',
        ],
        'response' => [
            'format' => yii\web\Response::FORMAT_JSON,
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [

                'GET <controller>' => '<controller>',
                'POST <controller:[\w-]+>' => '<controller>/create',
                '<controller:[\w-]+>s' => '<controller>/index',
                'PUT <controller:[\w-]+>/<id:\d+>' => '<controller>/update',
                'DELETE <controller:[\w-]+>/<id:\d+>' => '<controller>/delete',
                '<controller:[\w-]+>/<id:\d+>' => '<controller>/view',
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'test',
                    'pluralize' => false,
                    'extraPatterns' => [
                        'GET test-function' => 'test-function'
                    ]
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'usuario',
                    'pluralize' => false,
                    'extraPatterns' => [
                        'POST login' => 'login',
                        'POST register' => 'register',
                        'POST set-user-status' => 'set-user-status',
                    ]
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'servicio',
                    'pluralize' => false,
                    'extraPatterns' => [
                        'GET test' => 'test'
                    ]
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'funcion',
                    'pluralize' => false,

                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'funcion-servicio',
                    'pluralize' => false,

                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'auditoria',
                    'pluralize' => false,

                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'bitacora',
                    'pluralize' => false,

                ]
            ],
        ],
        /*'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],*/
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
