<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Order;

/**
 * OrderSearch represents the model behind the search form of `backend\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'customer_id', 'payment_id', 'deliver_id', 'status', 'date_create', 'date_update'], 'integer'],
            [['name', 'email', 'phone', 'address', 'name_ship', 'email_ship', 'phone_ship', 'address_ship', 'request', 'order_amount'], 'safe'],
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
        $query = Order::find()->orderBy('date_create DESC');;

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 15
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'order_id' => $this->order_id,
            'customer_id' => $this->customer_id,
            'payment_id' => $this->payment_id,
            'deliver_id' => $this->deliver_id,
            'status' => $this->status,
            'date_create' => $this->date_create,
            'date_update' => $this->date_update,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'name_ship', $this->name_ship])
            ->andFilterWhere(['like', 'email_ship', $this->email_ship])
            ->andFilterWhere(['like', 'phone_ship', $this->phone_ship])
            ->andFilterWhere(['like', 'address_ship', $this->address_ship])
            ->andFilterWhere(['like', 'request', $this->request])
            ->andFilterWhere(['like', 'order_amount', $this->order_amount]);

        return $dataProvider;
    }
}
