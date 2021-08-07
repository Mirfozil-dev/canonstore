<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string|null $img
 * @property string|null $title
 * @property string|null $content
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class News extends \yii\db\ActiveRecord
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
            'created_at' => 'Created Date',
            'updated_at' => 'Updated Date'
        ];
    }
    public function getCreatedDate() {
        return gmdate("Y-m-d H:i:s", $this->created_at);
    }
    public function getUpdatedDate() {
        return gmdate("Y-m-d H:i:s", $this->updated_at);
    }
}
