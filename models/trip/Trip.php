<?php

namespace app\models\trip;

use Yii;

/**
 * This is the model class for table "trip".
 *
 * @property int $id
 * @property double $start_point_x
 * @property double $start_point_y
 * @property double $end_point_x
 * @property double $ens_point_y
 * @property string $datetime
 * @property double $cost
 * @property int $status
 * @property int $owner_user_id
 * @property int $car_user_id
 *
 * @property User $carUser
 * @property User $ownerUser
 */
class Trip extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trip';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['start_point_x', 'start_point_y', 'end_point_x', 'ens_point_y', 'datetime', 'cost', 'status'], 'required'],
            [['start_point_x', 'start_point_y', 'end_point_x', 'ens_point_y', 'cost'], 'number'],
            [['datetime'], 'safe'],
            [['status', 'owner_user_id', 'car_user_id'], 'integer'],
            [['car_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['car_user_id' => 'id']],
            [['owner_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['owner_user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'start_point_x' => 'Start Point X',
            'start_point_y' => 'Start Point Y',
            'end_point_x' => 'End Point X',
            'ens_point_y' => 'Ens Point Y',
            'datetime' => 'Datetime',
            'cost' => 'Cost',
            'status' => 'Status',
            'owner_user_id' => 'Owner User ID',
            'car_user_id' => 'Car User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarUser()
    {
        return $this->hasOne(User::className(), ['id' => 'car_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwnerUser()
    {
        return $this->hasOne(User::className(), ['id' => 'owner_user_id']);
    }
}
