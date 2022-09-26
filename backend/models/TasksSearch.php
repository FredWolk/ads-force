<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use console\models\Tasks;

/**
 * TasksSearch represents the model behind the search form of `console\models\Tasks`.
 */
class TasksSearch extends Tasks
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'author_id', 'performer_id', 'price', 'responded', 'active', 'views'], 'integer'],
            [['title', 'about_project', 'technical_task', 'deadline', 'tags', 'status', 'materials', 'date_public'], 'safe'],
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
        $query = Tasks::find();

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
            'author_id' => $this->author_id,
            'performer_id' => $this->performer_id,
            'price' => $this->price,
            'responded' => $this->responded,
            'active' => $this->active,
            'views' => $this->views,
            'date_public' => $this->date_public,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'about_project', $this->about_project])
            ->andFilterWhere(['like', 'technical_task', $this->technical_task])
            ->andFilterWhere(['like', 'deadline', $this->deadline])
            ->andFilterWhere(['like', 'tags', $this->tags])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'materials', $this->materials]);

        return $dataProvider;
    }
}
