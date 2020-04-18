<?php

namespace backend\controllers;

use yii\filters\ContentNegotiator;
use yii\rest\ActiveController;
use yii\web\Response;
use app\models\User;

class UserController extends ActiveController
{


    public $modelClass = User::class;
    
    public function behaviors()
    {
        return [

            'contentNeogotiator' => [
                'class' => ContentNegotiator::class,
                'formatParam' => 'format',
                'formats' => [
//                    'application/xml' => Response::FORMAT_XML,
                    'application/json' => Response::FORMAT_JSON
                ]
            ]
        ];
    }

}