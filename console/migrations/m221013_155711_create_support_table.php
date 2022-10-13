<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%support}}`.
 */
class m221013_155711_create_support_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%support}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%support}}');
    }
}
