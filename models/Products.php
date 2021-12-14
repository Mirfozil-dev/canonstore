<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $category_id
 * @property string|null $description_ru
 * @property string|null $description_en
 * @property string|null $images
 * @property string|null $options
 * @property string|null $video_link
 * @property string|null $price
 * @property int|null $instock
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $status
 *
 * @property Carousel[] $carousels
 * @property Cart[] $carts
 * @property Compare[] $compares
 * @property Discount[] $discounts
 * @property OrderProducts[] $orderProducts
 * @property Categories $category
 * @property Wishlist[] $wishlists
 */
class Products extends \yii\db\ActiveRecord
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
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'instock', 'status'], 'integer'],
            [['description_ru', 'description_en'], 'string'],
            [['title'], 'string', 'max' => 45],
            [['video_link'], 'string', 'max' => 255],
            [['price'], 'string', 'max' => 100],
            [['images'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 4],
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
            'title' => 'Title',
            'category_id' => 'Category',
            'description_ru' => 'Description RU',
            'description_en' => 'Description EN',
            'video_link' => 'Video Link',
            'price' => 'Price',
            'instock' => 'Instock',
            'created_at' => 'Created Date',
            'updated_at' => 'Updated Date',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Carousels]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarousels()
    {
        return $this->hasMany(Carousel::className(), ['product_id' => 'id']);
    }

    /**
     * Gets query for [[Carts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarts()
    {
        return $this->hasMany(Cart::className(), ['product_id' => 'id']);
    }

    /**
     * Gets query for [[Compares]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompares()
    {
        return $this->hasMany(Compare::className(), ['product_id' => 'id']);
    }

    /**
     * Gets query for [[Discounts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiscounts()
    {
        return $this->hasMany(Discount::className(), ['product_id' => 'id']);
    }

    /**
     * Gets query for [[OrderProducts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderProducts()
    {
        return $this->hasMany(OrderProducts::className(), ['product_id' => 'id']);
    }

    /**
     * Gets query for [[ProductOptions]].
     *
     * @return \yii\db\ActiveQuery
     */

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Wishlists]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWishlists()
    {
        return $this->hasMany(Wishlist::className(), ['product_id' => 'id']);
    }
    public function getReviews()
    {
        return $this->hasMany(Reviews::className(), ['product_id' => 'id']);
    }
    public function getCreatedDate() {
        return gmdate("Y-m-d H:i:s", $this->created_at);
    }
    public function getUpdatedDate() {
        return gmdate("Y-m-d H:i:s", $this->updated_at);
    }
    public function getImages() {
        if (unserialize($this->images) && !empty(unserialize($this->images))) {
            return unserialize($this->images);
        } else {
            return [];
        }
    }

    public function getOptions() {
        if (unserialize($this->options) && !empty(unserialize($this->options))) {
            return Options::findAll(unserialize($this->options));
        } else {
            return [];
        }
    }
}
