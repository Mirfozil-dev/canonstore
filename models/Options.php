<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "options".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property int|null $option_group_id
 * @property int|null $status
 *
 * @property OptionGroups $optionGroup
 * @property ProductOptions[] $productOptions
 */
class Options extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'options';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['option_group_id', 'status'], 'integer'],
            [['title_ru', 'title_en'], 'string', 'max' => 45],
            [['option_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => OptionGroups::className(), 'targetAttribute' => ['option_group_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_ru' => 'Title RU',
            'title_en' => 'Title EN',
            'option_group_id' => 'Option Group',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[OptionGroup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOptionGroup()
    {
        return $this->hasOne(OptionGroups::className(), ['id' => 'option_group_id']);
    }

    /**
     * Gets query for [[ProductOptions]].
     *
     * @return int
     */
    public function getProductsCount()
    {
       $products = Products::find()->where(['status' => 1])->all();
       $count = 0;

        foreach ($products as $product) {
            if ($product) {

                foreach ($product->getOptions() as $option) {
                    if ($this->id === $option->id) {
                        $count++;
                    }
                }
            }
       }

        return $count;

    }
}
