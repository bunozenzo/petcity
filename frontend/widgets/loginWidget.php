<?php
	namespace frontend\widgets;
	use backend\models\Category;
	use yii\base\Widget;
	use yii\helpers\Html;
	use Yii;
	use common\models\CustomerLoginForm;

	class loginWidget extends Widget
	{
	    public $message;

	    public function init()
	    {
	        parent::init();
	      	
	    }

	    public function run()
	    {    
	        return $this->render('loginWidget');
	       
	    }
	}
?>