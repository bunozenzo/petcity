<?php
	namespace frontend\widgets;
	use backend\models\Category;
	use yii\base\Widget;
	use yii\helpers\Html;

	class fishContentWidget extends Widget
	{
	    public $message;
	    public function init()
	    {
	        parent::init();
	      	
	    }

	    public function run()
	    {
	    	$model=new Category();
	    	$cat=$model->getCategorybyParent(4);
	       return $this->render('fishContentWidget',['homeUrl'=>$this->message,'datacat'=>$cat]);
	    }
	}
?>