<?php

namespace app\models\route;

use Yii;
use app\models\car\Car;
use app\models\point\Point;

/**
 * This is the model class for table "route".
 *
 * @property int $id
 * @property int $car_id
 *
 * @property Car[] $cars
 * @property Point[] $points
 * @property Car $car
 */
class Route extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'route';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['car_id'], 'integer'],
            [['car_id'], 'exist', 'skipOnError' => true, 'targetClass' => Car::className(), 'targetAttribute' => ['car_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'car_id' => 'Car ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Car::className(), ['actual_route_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPoints()
    {
        return $this->hasMany(Point::className(), ['route_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCar()
    {
        return $this->hasOne(Car::className(), ['id' => 'car_id']);
    }
}
