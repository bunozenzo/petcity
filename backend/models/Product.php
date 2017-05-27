<?php

namespace backend\models;

use yii\data\Pagination;
use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $pro_id
 * @property string $pro_name
 * @property string $pro_image
 * @property string $pro_image1
 * @property string $pro_image2
 * @property string $pro_price
 * @property int $pro_sale_off
 * @property int $pro_cat_id
 * @property int $pro_supplier_id
 * @property int $pro_made_id
 * @property int $pro_size_id
 * @property string $description
 * @property int $status
 * @property string $begin_date_sale_off
 * @property string $end_date_sale_off
 * @property int $date_create
 * @property int $date_update
 *
 * @property OrderDetail[] $orderDetails
 * @property Category $proCat
 * @property Made $proMade
 * @property Size $proSize
 * @property Supplier $proSupplier
 * @property Wishlist[] $wishlists
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $qtt;

    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pro_name', 'pro_image', 'pro_price', 'pro_cat_id', 'pro_supplier_id', 'pro_made_id', 'pro_size_id', 'description', 'date_create', 'date_update'], 'required', 'message' => '{attribute} không được để trống'],
            [['pro_sale_off', 'pro_cat_id', 'pro_supplier_id', 'pro_made_id', 'pro_size_id', 'status', 'date_create', 'date_update', 'pro_price'], 'integer'],
            [['description'], 'string'],
            [['begin_date_sale_off', 'end_date_sale_off'], 'safe'],
            [['pro_name'], 'string', 'max' => 100],
            [['pro_image', 'pro_image1', 'pro_image2'], 'string', 'max' => 255],
            [['pro_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['pro_cat_id' => 'cat_id']],
            [['pro_made_id'], 'exist', 'skipOnError' => true, 'targetClass' => Made::className(), 'targetAttribute' => ['pro_made_id' => 'made_id']],
            [['pro_size_id'], 'exist', 'skipOnError' => true, 'targetClass' => Size::className(), 'targetAttribute' => ['pro_size_id' => 'size_id']],
            [['pro_supplier_id'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['pro_supplier_id' => 'sup_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pro_id' => 'Pro ID',
            'pro_name' => 'Tên sản phẩm',
            'pro_image' => 'Ảnh',
            'pro_image1' => 'Ảnh 1',
            'pro_image2' => 'Ảnh 2',
            'pro_price' => 'Giá',
            'pro_sale_off' => 'Chiết khấu',
            'pro_cat_id' => 'Danh mục',
            'pro_supplier_id' => 'Công ty',
            'pro_made_id' => 'Chất liệu',
            'pro_size_id' => 'Kích thước',
            'description' => 'Mô tả',
            'status' => 'Trạng thái',
            'begin_date_sale_off' => 'Begin',
            'end_date_sale_off' => 'End',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
        ];
    }

    public function getInfoProduct($id)
    {
        $data = Product::findBysql("SELECT a.pro_id,a.pro_name,a.pro_image,a.pro_image1,a.pro_image2,a.pro_price,
      a.pro_sale_off,b.sup_name,c.made_name,d.size_name,a.description,a.status,a.begin_date_sale_off,
      a.end_date_sale_off FROM product a INNER JOIN supplier b on a.pro_supplier_id=b.sup_id INNER JOIN made c
       on a.pro_made_id=c.made_id INNER JOIN size d on a.pro_size_id=d.size_id where a.pro_id=$id")->asArray()->all();
        return $data;
    }

    public function getSale()
    {
        $data = Product::findBysql("select * from Product where CURDATE() BETWEEN begin_date_sale_off and end_date_sale_off and pro_sale_off is not null and status=1 ORDER  By pro_sale_off desc limit 5")->asArray()->all();
        return $data;
    }

    public function getNewpro()
    {
        $data = Product::findBysql("select * from Product where DATE(FROM_UNIXTIME(date_create)) BETWEEN SUBDATE(CURDATE(), INTERVAL 25 DAY) and  CURDATE() and status=1 ORDER  By date_create desc limit 5")->asArray()->all();
        return $data;
    }

    public function getSaleof()
    {
        $pagination = $this->getPagerSaleof();
        $data = Product::findBysql("select * from Product where CURDATE() BETWEEN begin_date_sale_off and end_date_sale_off and pro_sale_off is not null and status=1")->asArray()
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $data;
    }

    public function getPagerSaleof()
    {
        $data = Product::findBysql("select * from Product where CURDATE() BETWEEN begin_date_sale_off and end_date_sale_off and pro_sale_off is not null and status=1")->asArray()->all();
        $pagination = new Pagination(['totalCount' => count($data), 'pageSize' => '15']);
        return $pagination;
    }
    public function getNewproduct()
    {
        $pagination = $this->getPagerNewproduct();
        $data = Product::findBysql(" select * from Product where DATE(FROM_UNIXTIME(date_create)) BETWEEN SUBDATE(CURDATE(), INTERVAL 10 DAY) and  CURDATE() and status=1 ORDER  By date_create desc")->asArray()
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $data;
    }

    public function getPagerNewproduct()
    {
        $data = Product::findBysql("select * from Product where DATE(FROM_UNIXTIME(date_create)) BETWEEN SUBDATE(CURDATE(), INTERVAL 10 DAY) and  CURDATE() and status=1 ORDER  By date_create desc")->asArray()->all();
        $pagination = new Pagination(['totalCount' => count($data), 'pageSize' => '15']);
        return $pagination;
    }
    public function getProduct($cat)
    {
        $pagination = $this->getPagerProduct1($cat);
        $data = Product::find()->asArray()->where('pro_cat_id=:cat', ['cat' => $cat])
            ->offset($pagination->offset)
            ->orderBy(['date_create' => SORT_DESC])
            ->limit($pagination->limit)
            ->all();
        return $data;
    }

    public function getPagerProduct1($pro)
    {
        $data = Product::find()
            ->where('pro_cat_id=:cat', ['cat' => $pro])
            ->all();
        $pagination = new Pagination(['totalCount' => count($data), 'pageSize' => '16']);
        return $pagination;
    }

    public function getSearch($pro)
    {
        $pagination = $this->getPagerProduct($pro);
        $data = Product::find()
            ->where(['like', 'pro_name', $pro])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $data;
    }

    public function getPagerProduct($pro)
    {
        $data = Product::find()
            ->where(['like', 'pro_name', $pro])
            ->all();
        $pagination = new Pagination(['totalCount' => count($data), 'pageSize' => '16']);
        return $pagination;
    }
    public function randomProduct($id)
    {
        $data = Product::findBysql("select * from product WHERE pro_cat_id in(select cat_id from category WHERE parent_id in(SELECT a.parent_id from category a inner join product b on a.cat_id=b.pro_cat_id where b.pro_id=$id)) order by rand() ASC limit 0,6")->asArray()->all();
        return $data;
    }
    public function  hotProduct(){
        $data=Product::findBySql("SELECT a.`pro_id`, `pro_name`, `pro_image`, `pro_image1`, `pro_image2`,b.`pro_price`, `pro_sale_off`, `pro_cat_id`, `pro_supplier_id`, `pro_made_id`, `pro_size_id`, `description`,a.`status`, `begin_date_sale_off`, `end_date_sale_off`,`date_create`, `date_update`,COUNT(b.pro_id) as soluong from order_detail a INNER JOIN product b where a.pro_id=b.pro_id GROUP BY b.pro_id order BY soluong desc LIMIT 5")->asArray()->all();
        return $data;
    }
    public function getHotproduct()
    {
        $pagination = $this->getPagerHotproduct();
        $data = Product::findBysql("SELECT a.`pro_id`, `pro_name`, `pro_image`, `pro_image1`, `pro_image2`,b.`pro_price`, `pro_sale_off`, `pro_cat_id`, `pro_supplier_id`, `pro_made_id`, `pro_size_id`, `description`,a.`status`, `begin_date_sale_off`, `end_date_sale_off`,`date_create`, `date_update`,COUNT(b.pro_id) as soluong from order_detail a INNER JOIN product b where a.pro_id=b.pro_id GROUP BY b.pro_id order BY soluong desc")->asArray()
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $data;
    }

    public function getPagerHotproduct()
    {
        $data = Product::findBysql("SELECT a.`pro_id`, `pro_name`, `pro_image`, `pro_image1`, `pro_image2`,b.`pro_price`, `pro_sale_off`, `pro_cat_id`, `pro_supplier_id`, `pro_made_id`, `pro_size_id`, `description`,a.`status`, `begin_date_sale_off`, `end_date_sale_off`,`date_create`, `date_update`,COUNT(b.pro_id) as soluong from order_detail a INNER JOIN product b where a.pro_id=b.pro_id GROUP BY b.pro_id order BY soluong desc")->asArray()->all();
        $pagination = new Pagination(['totalCount' => count($data), 'pageSize' => '15']);
        return $pagination;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::className(), ['pro_id' => 'pro_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProCat()
    {
        return $this->hasOne(Category::className(), ['cat_id' => 'pro_cat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProMade()
    {
        return $this->hasOne(Made::className(), ['made_id' => 'pro_made_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProSize()
    {
        return $this->hasOne(Size::className(), ['size_id' => 'pro_size_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProSupplier()
    {
        return $this->hasOne(Supplier::className(), ['sup_id' => 'pro_supplier_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWishlists()
    {
        return $this->hasMany(Wishlist::className(), ['pro_id' => 'pro_id']);
    }
}
