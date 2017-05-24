<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\components\Cart;
use frontend\models\Checkout;
use frontend\models\ CustomerSignup;
use backend\models\Customer;
use backend\models\Order;
use backend\models\OrderDetail;
use common\models\CustomerLoginForm;
use yii\base\Request;
use common\libs\sendmail;   
use common\libs\checkmail;
class OrderController extends \yii\web\Controller
{

    public function actionIndex()
    {
      $cart=new Cart();
      $cartstore=$cart->cartstore;
      $cost= $cart->getCost;
      $total= $cart->getTotalItem();
    $content='
    <table class="table table-bordered">
      <thead class="active">
          <th>STT</th>
          <th>Tên sản phẩm</th>
       
          <th>Giá</th>
          <th>Số lượng</th>
          <th>Thành tiền</th>   
      </thead>
      <tbody>';                                                          
              $total=0;
              $i=1;
             foreach ($cartstore as $key => $value) {
            $content.='<tr>
                <td>'.$i.'</td>
                <td><a href="">'. $value["pro_name"].'</a></td>
                <td>'.number_format($value['pro_price']).'</td>
                <td>
                  '. $value['qtt'].'
                </td>
                <td>'.number_format($value['qtt']*$value['pro_price']*(1-($value['pro_sale_off'])/100))."(VNĐ)".'</td>
              
            </tr>';
           $i++;}

           $content.=' <tr>
                <td></td>
                <td colspan="3">
                </td>
                <td align="right">Tổng Tiền:</td>
                <td>'. number_format($cost,0,' ',',')."(VNĐ)".'</td>
                
            </tr>
        </tbody>
    </table>';
      if (!Yii::$app->user->isGuest) {
            return $this->redirect(['payment']);
        }
        $model = new Checkout();
        if ($model->load(Yii::$app->request->post())) {      
        $post= Yii::$app->request->post()['Checkout'];
                    $order=new Order();
                     $order->name=$post['name'];
                     $order->phone=$post['phone'];
                     $order->address=$post['address'];
                     $order->email=$post['email'];
                     $order->name_ship=$post['name_ship'];
                     $order->phone_ship=$post['phone_ship'];
                     $order->address_ship=$post['address_ship'];
                     $order->email_ship=$post['email_ship'];
                    $order->request = $post['request'];
                    $order->payment_id = $post['payment'];
                    $order->deliver_id = $post['deliver'];
                    $order->order_amount = $post['amount'];
                    $order->status =1;
                    $order->date_create =time();
                    $order->date_update =time();
                    if($order->save()){
                       foreach ($cartstore as $item) {
                       $a=$item->pro_price*$item->qtt;
                       $orderdt=new OrderDetail();
                       $orderdt->order_id = $order->order_id;
                       $orderdt->pro_id = $item->pro_id;
                       $orderdt->pro_price = $item->pro_price;
                       $orderdt->order_detail_qty = $item->qtt;
                       $orderdt->pro_amount =(string)$a;
                       $orderdt->status = 1;
                      if( $orderdt->save()){

                      }
                  }
                  $mail=new sendmail();
                  $emailn=$post['email'];
                  $mail->mail($emailn,"Đơn Hàng",$content);
                  $cart=new Cart();
                  $cart->removeall();
                  return $this->redirect(['about']);
                  }
                   else{
                     return $this->render('index',['cartstore'=>$cartstore,'cost'=>$cost,'total'=>$total,'model' => $model,'user' => $user]);
                  }  
        } else {
            return $this->render('index',['cartstore'=>$cartstore,'cost'=>$cost,'total'=>$total,'model' => $model]);
        }
    }
     public function actionPayment()
    {
      $cart=new Cart();
      $cartstore=$cart->cartstore;
      $cost= $cart->getCost;
      $total= $cart->getTotalItem();
      $content='
    <table class="table table-bordered">
      <thead class="active">
          <th>STT</th>
          <th>Tên sản phẩm</th>
          <th>Giá</th>
          <th>Số lượng</th>
          <th>Thành tiền</th>   
      </thead>
      <tbody>';                              
                                      
                                   
              $total=0;
              $i=1;
             foreach ($cartstore as $key => $value) {
             
            
            $content.='<tr>
                <td>'.$i.'</td>
                <td><a href="">'. $value["pro_name"].'</a></td>
                <td>'.number_format($value['pro_price']).'</td>
                <td>
                  '. $value['qtt'].'
                </td>
                <td>'.number_format($value['qtt']*$value['pro_price']*(1-($value['pro_sale_off'])/100))."(VNĐ)".'</td>
              
            </tr>';
     

            $total+=$value['qtt']*$value['pro_price']*(1-($value['pro_sale_off'])/100);
           $i++; }

           $content.=' <tr>
                <td></td>
                <td colspan="3">
                </td>
                <td align="right">Tổng Tiền:</td>
                <td>'. number_format($cost,0,' ',',')."(VNĐ)".'</td>
                
            </tr>
        </tbody>
       </table>';
      $model = new Checkout();
      $model->name=Yii::$app->user->identity->full_name;
      $model->phone=Yii::$app->user->identity->phone;
      $model->address=Yii::$app->user->identity->address;
      $model->email=Yii::$app->user->identity->email;
      if ($model->load(Yii::$app->request->post())) {
                    $order=new Order();
                    $post=Yii::$app->request->post()['Checkout'];
                    $order->customer_id = Yii::$app->user->identity->id;
                    $order->name=$post['name'];
                    $order->phone=$post['phone'];
                    $order->address=$post['address'];
                    $order->email=$post['email'];
                    $order->name_ship=$post['name_ship'];
                    $order->phone_ship=$post['phone_ship'];
                    $order->address_ship=$post['address_ship'];
                    $order->email_ship=$post['email_ship'];
                    $order->request = $post['request'];
                    $order->payment_id = $post['payment'];
                    $order->deliver_id = $post['deliver'];
                    $order->order_amount = $post['amount'];
                    $order->status =1;
                    $order->date_create =time();
                    $order->date_update =time();
                    if($order->save()){
                       foreach ($cartstore as $item) {
                       $a=$item->pro_price*$item->qtt;
                       $orderdt=new OrderDetail();
                       $orderdt->order_id = $order->order_id;
                       $orderdt->pro_id = $item->pro_id;
                       $orderdt->pro_price = $item->pro_price;
                       $orderdt->order_detail_qty = $item->qtt;
                       $orderdt->pro_amount =(string)$a;
                       $orderdt->status = 1;
                        if( $orderdt->save()){
                       
                       }
                        }
                        $mail=new sendmail();
                        $emailn= $post['email'];
                        $mail->mail($emailn,"Đơn Hàng",$content);
                        $cart=new Cart();
                        $cart->removeall();
                        return $this->redirect(['about']);

                  }else{
                     return $this->render('index',['cartstore'=>$cartstore,'cost'=>$cost,'total'=>$total,'model' => $model]);
                  }
            
       } else {
            return $this->render('payment',['cartstore'=>$cartstore,'cost'=>$cost,'total'=>$total,'model' => $model]);
        }
       
    }
      public function actionAbout()
    {
         return $this->render('about');   
    }


}
