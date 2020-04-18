<?php

namespace backend\controllers;

use app\models\Country;
use yii\rest\ActiveController;
use yii\web\Response;

class CountryController extends ActiveController
{
    public $modelClass = Country::class;

    public function checkAccess($action, $model=null, $params=[]) {
        return true;
    }

}