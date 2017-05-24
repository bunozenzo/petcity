<?php
	namespace frontend\widgets;
	use yii\base\Widget;
	use yii\helpers\Html;
	use frontend\components\Cart;

	class cartWidget extends Widget
	{
	    public $message;
	    public function init()
	    {
	        parent::init();
	      	
	    }

	    public function run()
	    {
	     	$cart=new Cart();
		    $cartstore=$cart->cartstore;
		    $cost= $cart->getCost;
		    $total= $cart->getTotalItem();
	        return $this->render('cartWidget',['cartstore'=>$cartstore,'cost'=>$cost,'total'=>$total]);
	    }
	}
?>