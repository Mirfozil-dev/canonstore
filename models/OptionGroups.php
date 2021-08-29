<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "option_groups".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property string|null $categories
 * @property int|null $status
 *
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
            [['title_ru', 'title_en'], 'string', 'max' => 45],
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
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return array
     */
    public function getCategories()
    {
        if (unserialize($this->categories) && !empty(unserialize($this->categories))) {
            return Categories::findAll(unserialize($this->categories));
        } else {
            return [];
        }
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
