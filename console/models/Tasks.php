<?php

namespace console\models;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id
 * @property int $author_id
 * @property int|null $performer_id
 * @property string $title
 * @property string $about_project
 * @property string|null $technical_task
 * @property int|null $price
 * @property string $deadline
 * @property string|null $tags
 * @property string|null $status
 * @property int|null $responded
 * @property string|null $materials
 * @property int|null $active
 * @property int|null $views
 * @property string $date_public
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author_id', 'title', 'about_project', 'deadline'], 'required'],
            [['author_id', 'performer_id', 'price', 'responded', 'active', 'views'], 'integer'],
            [['about_project', 'technical_task', 'tags', 'status', 'materials'], 'string'],
            [['date_public'], 'safe'],
            [['title'], 'string', 'max' => 511],
            [['deadline'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Автор',
            'performer_id' => 'Исполнитель',
            'title' => 'Заголовок',
            'about_project' => 'О задании',
            'technical_task' => 'Техническое задание',
            'price' => 'Цена',
            'deadline' => 'Срок выполнения',
            'tags' => 'Теги',
            'status' => 'Статус',
            'responded' => 'Откликов',
            'materials' => 'Материалы',
            'active' => 'Активен \ Не активен',
            'views' => 'Просмотров',
            'date_public' => 'Дата публикации',
        ];
    }
}
