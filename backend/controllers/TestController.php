<?php


namespace backend\controllers;


use app\models\Test;
use yii\web\Controller;

class TestController extends Controller
{

    public function actionTest()
    {
        echo 'asd'+5;
    }

    public $modelClass = Test::class;

}