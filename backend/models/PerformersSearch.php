<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use console\models\Performers;

/**
 * PerformersSearch represents the model behind the search form of `app\models\Performers`.
 */
class PerformersSearch extends Performers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'rating', 'specialization_id'], 'integer'],
            [['name', 'position', 'photo', 'skills'], 'safe'],
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
        $query = Performers::find();

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
            'user_id' => $this->user_id,
            'rating' => $this->rating,
            'specialization_id' => $this->specialization_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'skills', $this->skills]);

        return $dataProvider;
    }
}
