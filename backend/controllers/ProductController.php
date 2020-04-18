<?php


namespace backend\controllers;


use app\models\Product;
use yii\filters\ContentNegotiator;
use yii\rest\ActiveController;
use yii\web\Response;

class ProductController extends ActiveController
{

    public $modelClass = Product::class;

//    public function actions()
//    {
//        $actions = parent::actions();
//        return $actions;
//    }
//
//    public function behaviors()
//    {
//        return [
//
//            'contentNeogotiator' =>[
//                'class' =>  ContentNegotiator::class,
//                'formatParam' => 'format',
//                'formats' => [
//                    'application/xml' => Response::FORMAT_XML,
//                    'application/json' => Response::FORMAT_JSON
//                ]
//            ]
//        ];
//    }

}