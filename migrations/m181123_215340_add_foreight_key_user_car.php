<?php

use yii\db\Migration;

/**
 * Class m181123_215340_add_foreight_key_user_car
 */
class m181123_215340_add_foreight_key_user_car extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // add column 'user_id
        $this->addColumn(
            'car',
            'user_id',
            $this->integer(11)
        );


        // add foreign key for table `car`
        $this->addForeignKey(
            'fk-user-car_id',
            'car',
            'user_id',
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
        echo "m181123_215340_add_foreight_key_user_car cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181123_215340_add_foreight_key_user_car cannot be reverted.\n";

        return false;
    }
    */
}
