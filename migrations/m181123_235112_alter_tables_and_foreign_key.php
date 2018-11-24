<?php

use yii\db\Migration;

/**
 * Class m181123_235112_alter_tables_and_foreign_key
 */
class m181123_235112_alter_tables_and_foreign_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {


        $this->addForeignKey(
            'fk-car-actual_route_id',
            'car',
            'actual_route_id',
            'route',
            'id',
            'NO ACTION'
        );
        $this->dropForeignKey(
            'fk-point-car_id',
            'point'
        );

        $this->dropColumn(
            'point',
            'car_id'
        );

        $this->addColumn(
            'car',
            'actual_route_id',
            $this->integer(11)
        );
        $this->addColumn(
            'point',
            'route_id',
            $this->integer(11)
        );

        $this->addForeignKey(
            'fk-point-route_id',
            'point',
            'route_id',
            'route',
            'id',
            'NO ACTION'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181123_235112_alter_tables_and_foreign_key cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181123_235112_alter_tables_and_foreign_key cannot be reverted.\n";

        return false;
    }
    */
}
