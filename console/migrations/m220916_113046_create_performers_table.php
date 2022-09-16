<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%performers}}`.
 */
class m220916_113046_create_performers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%performers}}', [
            'id'                    => $this->primaryKey(),
            'user_id'               => $this->integer(),
            'name'                  => $this->string(255),
            'position'              => $this->string(255),
            'rating'                => $this->integer()->defaultValue(0),
            'specialization_id'     => $this->integer()->null(),
            'photo'                 => $this->string(1023)->null(),
            'skills'                => $this->text()->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%performers}}');
    }
}
