<?php
namespace frontend\widgets;
use backend\models\Product;
use yii\base\Widget;
use yii\helpers\Html;

class hotproductWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();

    }

    public function run()
    {
        $product=new Product();
        $datapro=$product->hotProduct();
        return $this->render('hotproductWidget', ['datapro'=>$datapro]);
    }
}
