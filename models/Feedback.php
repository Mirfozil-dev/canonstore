<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "feedback".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $surname
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $comment
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Feedback extends \yii\db\ActiveRecord
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
        return 'feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'surname', 'phone', 'email', 'comment'], 'required', 'message' => 'Поле не может быть пустым'],
            [['name', 'surname', 'email'], 'string', 'max' => 30],
            [['phone'], 'string', 'max' => 20],
            [['comment'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'phone' => 'Телефон',
            'email' => 'E-mail',
            'comment' => 'Чем мы можем помочь?',
            'created_at' => 'Created At',
        ];
    }

    public function getCreatedDate() {
        return gmdate("Y-m-d H:i:s", $this->created_at);
    }
    public function getUpdatedDate() {
        return gmdate("Y-m-d H:i:s", $this->updated_at);
    }
}
