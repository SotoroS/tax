<?php

namespace app\models\car;

use Yii;
use app\models\route\Route;
use app\models\User;

/**
 * This is the model class for table "car".
 *
 * @property int $id
 * @property string $name
 * @property int $user_id
 * @property int $actual_route_id
 *
 * @property Route $actualRoute
 * @property User $user
 * @property Route[] $routes
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'car';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'actual_route_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['actual_route_id'], 'exist', 'skipOnError' => true, 'targetClass' => Route::className(), 'targetAttribute' => ['actual_route_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'user_id' => 'User ID',
            'actual_route_id' => 'Actual Route ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActualRoute()
    {
        return $this->hasOne(Route::className(), ['id' => 'actual_route_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoutes()
    {
        return $this->hasMany(Route::className(), ['car_id' => 'id']);
    }
}
