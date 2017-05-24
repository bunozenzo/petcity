<?php

namespace frontend\controllers;
use Yii;
use common\models\CustomerLoginForm;
class LoginController extends \yii\web\Controller
{
    public $result=array();
    public function actionIndex()
    {
        return $this->render('index');
    }
      public function actionLogin()
    {
        $model = new CustomerLoginForm();
        if(isset($_POST['username']) && isset($_POST['password']))
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $model->username=$username;
            $model->password=$password;
            if( $model->login()){
                echo "ok";
                // $result[]=Yii::$app->user->identity->id;
                // $result[]=Yii::$app->user->identity->username;
                // return json_encode($result); 
            }   
        }
    }

}
