<?php
	namespace frontend\widgets;
	use backend\models\Category;
	use yii\base\Widget;
	use yii\helpers\Html;

	class animalContentWidget extends Widget
	{
	    public $message;
	    public function init()
	    {
	        parent::init();
	      	
	    }

	    public function run()
	    {
	    	$model=new Category();
	    	$cat=$model->getCategorybyParent(5);
	       return $this->render('animalContentWidget',['homeUrl'=>$this->message,'datacat'=>$cat]);
	    }
	}
?>