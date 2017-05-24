<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\News;

/**
 * NewsSearch represents the model behind the search form of `backend\models\News`.
 */
class NewsSearch extends News
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['new_id', 'new_cat_id', 'status', 'date_create', 'date_update'], 'integer'],
            [['new_title', 'new_name', 'new_image', 'new_description', 'new_content'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = News::find();

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
            'new_id' => $this->new_id,
            'new_cat_id' => $this->new_cat_id,
            'status' => $this->status,
            'date_create' => $this->date_create,
            'date_update' => $this->date_update,
        ]);

        $query->andFilterWhere(['like', 'new_title', $this->new_title])
            ->andFilterWhere(['like', 'new_name', $this->new_name])
            ->andFilterWhere(['like', 'new_image', $this->new_image])
            ->andFilterWhere(['like', 'new_description', $this->new_description])
            ->andFilterWhere(['like', 'new_content', $this->new_content]);

        return $dataProvider;
    }
}
