<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "picture".
 *
 * @property int $id
 * @property int $product_id
 * @property string $image
 * @property string $created_at
 */
class Picture extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'picture';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'image'], 'required'],
            [['product_id'], 'integer'],
            [['created_at'], 'safe'],
            [['image'], 'file', 'extensions' => 'png,jpg,gif', 'maxFiles'=> 5, 'skipOnEmpty'=>false],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'image' => 'Image',
            'created_at' => 'Created At',
        ];
    }
}
