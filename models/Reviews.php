<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "reviews".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $product_id
 * @property int|null $rating
 * @property string|null $text
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Users $user
 */
class Reviews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }

    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'rating', 'product_id'], 'integer'],
            [['text'], 'string'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User',
            'product_id' => 'Product',
            'rating' => 'Rating',
            'text' => 'Text',
            'created_at' => 'Created Date',
            'updated_at' => 'Updated Date'
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }

    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['id' => 'product_id']);
    }

    public function getCreatedDate() {
        return gmdate("Y-m-d H:i:s", $this->created_at);
    }
    public function getUpdatedDate() {
        return gmdate("Y-m-d H:i:s", $this->updated_at);
    }
}
