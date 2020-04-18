<?php

namespace app\models;


use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

class Country extends ActiveRecord
{


    public function rules()
    {
        return [
            [['code', 'name', 'population'], 'required'],

        ];
    }





}