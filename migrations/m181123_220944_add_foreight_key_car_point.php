<?php

use yii\db\Migration;

/**
 * Class m181123_220944_add_foreight_key_car_point
 */
class m181123_220944_add_foreight_key_car_point extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // add column 'user_id
        $this->addColumn(
            'point',
            'car_id',
            $this->integer(11)
        );


        // add foreign key for table `car`
        $this->addForeignKey(
            'fk-point-car_id',
            'point',
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
        echo "m181123_220944_add_foreight_key_car_point cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181123_220944_add_foreight_key_car_point cannot be reverted.\n";

        return false;
    }
    */
}
