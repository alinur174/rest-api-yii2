<?php


namespace app\models;

use backend\controllers\CategoryController;
use Yii;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{

    const HandsUp = 'Hello world';


    public static function tableName()
    {
        return 'category'; // TODO: Change the autogenerated stub
    }


    public function getProduct()
    {

        return $this->hasMany(Product::className(), ['category_id' => 'id']);

    }


}