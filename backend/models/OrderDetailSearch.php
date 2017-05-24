<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OrderDetail;

/**
 * OrderDetailSearch represents the model behind the search form of `backend\models\OrderDetail`.
 */
class OrderDetailSearch extends OrderDetail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_detail_id', 'order_id', 'pro_id', 'order_detail_qty', 'status'], 'integer'],
            [['pro_price', 'pro_amount'], 'safe'],
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
    public function search($params,$id_order_detail)
    {
        $query = OrderDetail::findBySql("SELECT * FROM `order_detail` WHERE order_id=$id_order_detail");

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
            'order_detail_id' => $this->order_detail_id,
            'order_id' => $this->order_id,
            'pro_id' => $this->pro_id,
            'order_detail_qty' => $this->order_detail_qty,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'pro_price', $this->pro_price])
            ->andFilterWhere(['like', 'pro_amount', $this->pro_amount]);

        return $dataProvider;
    }
}
