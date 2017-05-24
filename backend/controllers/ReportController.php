<?php

namespace backend\controllers;
use Yii;
use backend\models\Order;
class ReportController extends \yii\web\Controller
{
     public function actionIndex()
    {
    	if(isset($_POST['month'])&&isset($_POST['year']))
    	{
    		$month=$_POST['month'];
    		$year=$_POST['year'];
    	$report=Order::getreport($month,$year);
         return json_encode($report);
       }
       else
       {
       	return $this ->render("index");
       }
    }
    public function actionTest(){
        $reportbanchay=Order::getbanchay(5,2017);
        var_dump($reportbanchay);
    }
    public function actionTurnover()
    {
    	if(isset($_POST['month']) && isset($_POST['year']))
    	{
    		$month=$_POST['month'];
    		$year=$_POST['year'];
    		if($year!=="" && $month!=="")
    		{
    		$revenue=Order::getreportRevenue($month,$year);   
    		}
    		 return json_encode($revenue);
    	}
    	else
    	{
    	return $this->render('turnover');
        }
    }
    public function actionBanchay()
    {
        if(isset($_POST['month']) && isset($_POST['year']))
        {
            $month=$_POST['month'];
            $year=$_POST['year'];
            $reportbanchay=Order::getbanchay($month,$year);
            return json_encode($reportbanchay);
        }
        else
        {
        return $this->render('banchay');
        }
    }
}
