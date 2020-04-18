<?php


namespace frontend\controllers;


use frontend\models\Product;
use yii\rest\ActiveController;


class ProductController extends ActiveController
{

    public $modelClass = Product::class;

    public function test()
    {
        echo 'hello';
    }
}