<?php
	namespace frontend\widgets;
	use backend\models\Category;
	use yii\base\Widget;
	use yii\helpers\Html;

	class birdContentWidget extends Widget
	{
	    public $message;
	    public function init()
	    {
	        parent::init();
	      	
	    }

	    public function run()
	    {
	    	$model=new Category();
	    	$cat=$model->getCategorybyParent(3);
	       return $this->render('birdContentWidget',['homeUrl'=>$this->message,'datacat'=>$cat]);
	    }
	}
?>