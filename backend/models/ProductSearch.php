<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Product;

/**
 * ProductSearch represents the model behind the search form of `backend\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pro_id', 'pro_sale_off', 'pro_cat_id', 'pro_supplier_id', 'pro_made_id', 'pro_size_id', 'status', 'date_create', 'date_update'], 'integer'],
            [['pro_name', 'pro_image', 'pro_image1', 'pro_image2', 'pro_price', 'description', 'begin_date_sale_off', 'end_date_sale_off'], 'safe'],
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
        $query = Product::find();

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
            'pro_id' => $this->pro_id,
            'pro_sale_off' => $this->pro_sale_off,
            'pro_cat_id' => $this->pro_cat_id,
            'pro_supplier_id' => $this->pro_supplier_id,
            'pro_made_id' => $this->pro_made_id,
            'pro_size_id' => $this->pro_size_id,
            'status' => $this->status,
            'begin_date_sale_off' => $this->begin_date_sale_off,
            'end_date_sale_off' => $this->end_date_sale_off,
            'date_create' => $this->date_create,
            'date_update' => $this->date_update,
        ]);

        $query->andFilterWhere(['like', 'pro_name', $this->pro_name])
            ->andFilterWhere(['like', 'pro_image', $this->pro_image])
            ->andFilterWhere(['like', 'pro_image1', $this->pro_image1])
            ->andFilterWhere(['like', 'pro_image2', $this->pro_image2])
            ->andFilterWhere(['like', 'pro_price', $this->pro_price])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
