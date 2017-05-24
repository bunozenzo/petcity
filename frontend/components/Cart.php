<?php 
namespace frontend\components;
use Yii;
date_default_timezone_set('Asia/Ho_Chi_Minh');
/**
* 
*/
class Cart 
{
	/* phương thức thêm giỏ hàng
	@data sẽ lấy theo id
	@qty số lượng them vào giỏ hàng
	*/
	/* Khởi tạo session trong yii sử dung Yii::$app->session['name']='gia tri';
	Lấy giá trị session $session= Yii::$app->session['name'];
	*/
	public $cartstore;
	public $getCost=0;
	public function __construct()
	{
		$this->cartstore=Yii::$app->session['cart'];
		$this->getCost=$this->getCost();
	}
	public function add($data,$qty=1)
	{
		if(isset($this->cartstore[$data->pro_id])){
		    if($this->cartstore[$data->pro_id]->qtt<5) {
                $this->cartstore[$data->pro_id]->qtt = $this->cartstore[$data->pro_id]->qtt + $qty;
                Yii::$app->session['cart'] = $this->cartstore;
                return true;
            }else{
		        return false;
            }
		}
		else{
			$this->cartstore[$data->pro_id]=$data;
			$this->cartstore[$data->pro_id]->qtt=$qty;
			Yii::$app->session['cart']=$this->cartstore;
			return true;
		}
	
	}
	public function remove($data){
		unset($this->cartstore[$data->pro_id]); 
		Yii::$app->session['cart']=$this->cartstore;
	}
	public function update($pro_id,$qty){
		$this->cartstore[$pro_id]->qtt=$qty;
		Yii::$app->session['cart']=$this->cartstore;
	}
	public function getCost(){
		if($this->cartstore){
			foreach ($this->cartstore as $item) {
				if(strtotime(date('Y/m/d'))>=strtotime($item->begin_date_sale_off)&&strtotime(date('Y/m/d'))<=strtotime($item->end_date_sale_off)){
					$this->getCost += $item->qtt*$item->pro_price*(1-($item->pro_sale_off)/100);
				}else{
					$this->getCost += $item->qtt*$item->pro_price;
				}
				
			}
		}
		return $this->getCost;
	}
	public function getTotalItem(){
		$total=0;
		if($this->cartstore){
			foreach ($this->cartstore as $item) {
				$total+=$item->qtt;
			}
		}
		return $total;
	}
	public function removeall(){
		$this->cartstore=[]; 
		Yii::$app->session['cart']=$this->cartstore;
	}
}
 ?>