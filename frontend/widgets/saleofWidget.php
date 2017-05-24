<?php
	namespace frontend\widgets;
	use backend\models\Product;
	use yii\base\Widget;
	use yii\helpers\Html;

	class saleofWidget extends Widget
	{
	    public $message;

	    public function init()
	    {
	        parent::init();
	      	
	    }
	    public function run()
	    {
	    	$product=new Product();
	    	$datapro=$product->getSale();
	       return $this->render('saleofWidget',['datapro'=>$datapro]);
	    }
	}
?>