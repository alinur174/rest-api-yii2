<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
//            'parsers' => [
//                'application/json' => 'yii\web\JsonParser',
//            ]
        ],
//        'user' => [
//            'identityClass' => 'app\models\User',
//            'enableAutoLogin' => true,
//            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
//            'enableSession' => false //отключил для аpi
//        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],


        'urlManager' => [
            'enablePrettyUrl' => true,
//            'enableStrictParsing' => false,
            'showScriptName' => false,
//            'rules' => [
//                ['class' => 'yii\rest\UrlRule',
//                    'controller' => ['user', 'product', 'country', 'test'],
//                    'pluralize' => false,
//                ],
//
//            ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'alizanalizan309@gmail.com',
                'password' => 'alizhansanzhar',
                'port' => '587',
                'encryption' => 'tls',
            ],
        ],


    ],
    'params' => $params,
];
