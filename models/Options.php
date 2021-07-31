<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "options".
 *
 * @property int $id
 * @property string|null $title
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
            [['title'], 'string', 'max' => 45],
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
            'title' => 'Title',
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
     * @return \yii\db\ActiveQuery
     */
    public function getProductOptions()
    {
        return $this->hasMany(ProductOptions::className(), ['option_id' => 'id']);
    }
}
