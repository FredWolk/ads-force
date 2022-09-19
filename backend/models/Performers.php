<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "performers".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $name
 * @property string|null $position
 * @property int|null $rating
 * @property int|null $specialization_id
 * @property string|null $photo
 * @property string|null $skills
 */
class Performers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'performers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'rating', 'specialization_id'], 'integer'],
            [['skills'], 'string'],
            [['name', 'position'], 'string', 'max' => 255],
            [['name', 'position'], 'required', 'message' => 'Обязательно для заполнения'],
            [['photo'], 'string', 'max' => 1023],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'ID пользователя',
            'name' => 'ФИО',
            'position' => 'Позиция',
            'rating' => 'Рейтинг',
            'specialization_id' => 'Специализация',
            'photo' => 'Фото',
            'skills' => 'Навыки',
        ];
    }
}
