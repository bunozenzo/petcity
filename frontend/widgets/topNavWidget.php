<?php
	namespace frontend\widgets;
	use backend\models\Category;
	use yii\base\Widget;
	use yii\helpers\Html;

	class topNavWidget extends Widget
	{
	    public $message;

	    public function init()
	    {
	        parent::init();
	      	
	    }
	    public function run()
	    {
	    	$model=new Category();
	    	$cat=$model->getCategorybyParent();
	       return $this->render('topNavWidget',['homeUrl'=>$this->message,'datacat'=>$cat]);
	    }
	}
?>