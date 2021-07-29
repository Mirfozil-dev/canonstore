<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_options".
 *
 * @property int $id
 * @property int|null $product_id
 * @property int|null $option_id
 *
 * @property Options $option
 * @property Products $product
 */
class ProductOptions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_options';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'option_id'], 'integer'],
            [['option_id'], 'exist', 'skipOnError' => true, 'targetClass' => Options::className(), 'targetAttribute' => ['option_id' => 'id']],
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
            'product_id' => 'Product ID',
            'option_id' => 'Option ID',
        ];
    }

    /**
     * Gets query for [[Option]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOption()
    {
        return $this->hasOne(Options::className(), ['id' => 'option_id']);
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['id' => 'product_id']);
    }
}
