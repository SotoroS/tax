<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\point\Point;

/**
 * PointSearch represents the model behind the search form of `app\models\point\Point`.
 */
class PointSearch extends Point
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'route_id'], 'integer'],
            [['x', 'y'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Point::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'x' => $this->x,
            'y' => $this->y,
            'route_id' => $this->route_id,
        ]);

        return $dataProvider;
    }
}
