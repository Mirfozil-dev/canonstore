<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "option_groups".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property int|null $category_id
 * @property int|null $status
 *
 * @property Categories $category
 * @property Options[] $options
 */
class OptionGroups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'option_groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'status'], 'integer'],
            [['title_ru', 'title_en'], 'string', 'max' => 45],
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
            'title_ru' => 'Title RU',
            'title_en' => 'Title EN',
            'category_id' => 'Category',
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

    /**
     * Gets query for [[Options]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOptions()
    {
        return $this->hasMany(Options::className(), ['option_group_id' => 'id']);
    }
}
