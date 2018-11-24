<?php

use yii\db\Migration;

/**
 * Handles the creation of table `trips`.
 */
class m181124_030243_create_trips_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('trip', [
            'id' => $this->primaryKey(),
            'start_point_x' => $this->double()->notNull(),
            'start_point_y' => $this->double()->notNull(),
            'end_point_x' => $this->double()->notNull(),
            'ens_point_y' => $this->double()->notNull(),
            'datetime' => $this->dateTime()->notNull(),
            'cost' => $this->double()->notNull(),
            'status' => $this->integer()->notNull(),
            'owner_user_id' => $this->integer(11),
            'car_user_id' => $this->integer(11),
        ]);

        $this->addForeignKey(
            'fk_trip_owner_user',
            'trip',
            'owner_user_id',
            'user',
            'id',
            'NO ACTION'
        );

        $this->addForeignKey(
            'fk_trip_car_user',
            'trip',
            'car_user_id',
            'user',
            'id',
            'NO ACTION'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('trips');
    }
}
