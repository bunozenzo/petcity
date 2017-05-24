<?php

namespace frontend\controllers;
use Yii;
use frontend\components\Cart;
use backend\models\Product;

class CartController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $cart=new Cart();
        $cartstore=$cart->cartstore;
        $cost= $cart->getCost;
        $total= $cart->getTotalItem();
        return $this->render('index',['cartstore'=>$cartstore,'cost'=>$cost,'total'=>$total]);
    }
     public function actionAddCart()
    {
        $cart=new Cart();
        if(Yii::$app->request->post()){
            $pro_id=$_POST['pro_id'];
            $model=Product::findone(['pro_id'=>$pro_id,'status'=>1]);
            if($model){
                $qtt=$_POST['qtt'];
                if($cart->add($model,$qtt)==true){
                    Yii::$app->session->setFlash('success', "Thêm sản phẩm vào giỏ hàng thành công");
                }else{
                    Yii::$app->session->setFlash('success', "Bạn đã đặt đủ 5 sản phẩm");
                }
            }
            else
            {
                Yii::$app->session->setFlash('success', "Sản phẩm đã hết hàng");
            }
        }
         return $this->redirect(['index']);
    }
     public function actionAdd($slug)
    {
      $cart=new Cart();
      $model=Product::findone(['pro_id'=>$slug,'status'=>1]);
      if($model){
          if($cart->add($model)==true){
              echo  'ok';
          }else{
              echo 'false';
          }
      }else{
          echo  'error';
      }

    }

      public function actionRemove($slug)
    {
        $cart=new Cart();
        $model=Product::findone(['pro_id'=>$slug]);
        $cart->remove($model);
        return $this->redirect(['index']);
    }
      public function actionUpdateCart()
    {
        $cart=new Cart();
        if(Yii::$app->request->post()){
            $pro_id=$_POST['pro_id'];
            $qtt=$_POST['qtt'];
            $cart->update($pro_id,$qtt);
        
        }
        return $this->redirect(['index']);
    }
    public function actionClear(){
        $cart=new Cart();
        $cart->removeall();
        return $this->redirect(['index']);
    }
}
