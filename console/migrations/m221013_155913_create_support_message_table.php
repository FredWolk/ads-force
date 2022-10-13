<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%support_message}}`.
 */
class m221013_155913_create_support_message_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%support_message}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%support_message}}');
    }
}
