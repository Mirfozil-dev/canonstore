<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_carousel".
 *
 * @property int $id
 * @property int|null $category_id
 * @property int|null $products_count
 * @property int|null $status
 *
 * @property Categories $category
 */
class ProductCarousel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_carousel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'products_count', 'status'], 'default', 'value' => null],
            [['category_id', 'products_count', 'status'], 'integer'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'products_count' => 'Products Count',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }
}
