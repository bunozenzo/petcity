<?php
	namespace frontend\widgets;
	use backend\models\Product;
	use yii\base\Widget;
	use yii\helpers\Html;

	class newproWidget extends Widget
	{
	    public $message;

	    public function init()
	    {
	        parent::init();
	      	
	    }
	    public function run()
	    {
	    	$product=new Product();
	    	$datapro=$product->getNewpro();
	       return $this->render('newproWidget',['datapro'=>$datapro]);
	    }
	}
?>