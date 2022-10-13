<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dialog_messages}}`.
 */
class m221013_155420_create_dialog_messages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dialog_messages}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dialog_messages}}');
    }
}
