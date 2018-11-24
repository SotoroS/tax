<?php

use yii\db\Migration;

/**
 * Handles the creation of table `point`.
 */
class m181123_213617_create_point_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('point', [
            'id' => $this->primaryKey(),
            'x' => $this->double()->notNull(),
            'y' => $this->double()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('point');
    }
}
