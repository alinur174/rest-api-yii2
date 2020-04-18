<?php

namespace app\models\Behaviors;

use yii\base\Behavior;
use Yii;
use yii\web\Controller;

class FirstBehavior extends Behavior
{
    public function events()
    {
        return [
            Controller::EVENT_BEFORE_ACTION => 'checkAccess'
        ];

    }

    public function checkAccess()
    {
        if (Yii::$app->user->isGuest) {
            echo 'hello world';

        }
    }
}