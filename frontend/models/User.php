<?php


namespace frontend\models;


use backend\controllers\Traits\TraitIdentityInterface;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    use TraitIdentityInterface;

    public function fields()
    {
        return [
            'id', 'username', 'access_token', 'number'
        ];
    }

    public static function tableName()
    {
        return '{{%users}}';
    }


//  public function rules()
//  {
//      return [
//          [['username', 'password_hash', 'access_token', 'number' ], 'required']
//      ];
//  }
}