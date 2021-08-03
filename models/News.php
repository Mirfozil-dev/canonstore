<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string|null $img
 * @property string|null $title
 * @property string|null $content
 * @property string|null $date
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['img'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['title'], 'string', 'max' => 100],
            [['date'], 'date']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Image',
            'title' => 'Title',
            'content' => 'Content',
            'date' => 'Date'
        ];
    }
}
