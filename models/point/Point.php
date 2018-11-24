<?php

namespace app\models\point;

use Yii;
use app\models\route\Route;

/**
 * This is the model class for table "point".
 *
 * @property int $id
 * @property double $x
 * @property double $y
 * @property int $route_id
 *
 * @property Route $route
 */
class Point extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'point';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['x', 'y'], 'required'],
            [['x', 'y'], 'number'],
            [['route_id'], 'integer'],
            [['route_id'], 'exist', 'skipOnError' => true, 'targetClass' => Route::className(), 'targetAttribute' => ['route_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'x' => 'X',
            'y' => 'Y',
            'route_id' => 'Route ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoute()
    {
        return $this->hasOne(Route::className(), ['id' => 'route_id']);
    }
}
