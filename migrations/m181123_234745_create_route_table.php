<?php

use yii\db\Migration;

/**
 * Handles the creation of table `route`.
 */
class m181123_234745_create_route_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('route', [
            'id' => $this->primaryKey(),
            'car_id' => $this->integer(11),
        ]);

        // add foreign key for table `route`
        $this->addForeignKey(
            'fk-route-car_id',
            'route',
            'car_id',
            'car',
            'id',
            'NO ACTION'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('route');
    }
}
