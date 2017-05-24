<?php
	namespace frontend\widgets;
	use backend\models\Category;
	use yii\base\Widget;
	use yii\helpers\Html;

	class dogContentWidget extends Widget
	{
	    public $message;
	    public function init()
	    {
	        parent::init();
	      	
	    }

	    public function run()
	    {
	    	$model=new Category();
	    	$cat=$model->getCategorybyParent(1);
	       return $this->render('dogContentWidget',['homeUrl'=>$this->message,'datacat'=>$cat]);
	    }
	}
?>