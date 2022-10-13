<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tariffs}}`.
 */
class m221013_155023_create_tariffs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tariffs}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tariffs}}');
    }
}
