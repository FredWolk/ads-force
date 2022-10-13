<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tariffs_alias}}`.
 */
class m221013_155238_create_tariffs_alias_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tariffs_alias}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tariffs_alias}}');
    }
}
