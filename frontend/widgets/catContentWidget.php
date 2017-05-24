<?php
	namespace frontend\widgets;
	use backend\models\Category;
	use yii\base\Widget;
	use yii\helpers\Html;

	class catContentWidget extends Widget
	{
	    public $message;
	    public function init()
	    {
	        parent::init();
	      	
	    }

	    public function run()
	    {
	    	$model=new Category();
	    	$cat=$model->getCategorybyParent(2);
	       return $this->render('catContentWidget',['homeUrl'=>$this->message,'datacat'=>$cat]);
	    }
	}
?>