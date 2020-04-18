<?php


namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;
use app\models\User;
use Yii;

class RegisterForm extends Model
{

    public $name;
    public $password;
    public $role;
    public $email;

    public static function tableName()
    {
        return 'Register';
    }

    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],
            ['email', 'email']

        ];
    }


    public function save($runValidation = true, $attributeNames = null)
    {
        if ($this->validate()) {
            $user = new User();
            $user->name = $this->name;
            $user->password = Yii::$app->security->generatePasswordHash($this->password);
            $user->email = $this->email;
            $user->role = 'a';


            if ($user->save()) {
                return $user;
            };
        }

        return false;


    }

}