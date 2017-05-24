<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $cat_id
 * @property string $cat_name
 * @property int $parent_id
 * @property int $status
 * @property int $date_create
 * @property int $date_update
 *
 * @property Product $product
 * @property Made[] $pros
 * @property Size[] $pros0
 * @property Supplier[] $pros1
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $data;
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name', 'parent_id', 'date_create', 'date_update'], 'required','message'=>'{attribute} không được để trống'],
            [['parent_id', 'status', 'date_create', 'date_update'], 'integer'],
            [['cat_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => 'Cat ID',
            'cat_name' => 'Tên loại danh mục',
            'parent_id' => 'Danh mục',
            'status' => 'Trạng thái',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
        ];
    }
    public function getAllCategory($parent=0,$level=""){
        $resul= Category::find()->asArray()->where('parent_id=:parent',['parent'=>$parent])->all();
        $level.="--";
        foreach ($resul as $key =>$value){
            if($parent==0){
                $level="";
            }
            $this->data[$value["cat_id"]]=$level.$value["cat_name"];
            self:: getCategoryParent($value["cat_id"],$level);
        }
        return $this->data;
    }
    public function getAllCategorynew(){
        $resul= Category::findBySql("select * from Category where parent_id in(select cat_id as parent_id from Category where cat_name= 'tin tuc')")->asArray()->all();
        foreach ($resul as $key =>$value){
            $this->data[$value["cat_id"]]=$value["cat_name"];
        }
        return $this->data;
    }
    public function getNewCategory(){
        $resul= Category::findBySql("select * from Category where parent_id in(select cat_id as parent_id from Category where cat_name= 'tin tuc')")->asArray()->all();
        return $resul;
    }
    public function getCategoryParent($parent=0,$level=""){
        $resul= Category::find()->asArray()->where('parent_id=:parent',['parent'=>$parent])->all();
        $level.="--";
        foreach ($resul as $key =>$value){
            if($parent==0){
                $level="";
            }
            $this->data[$value["cat_id"]]=$level.$value["cat_name"];
            self:: getCategoryParent($value["cat_id"],$level);
        }
        return $this->data;
    }

    public function getCategorybyParent($parent=0,$status=1){
        $data= Category::find()->asArray()->where('parent_id=:parent and status=:status',['parent'=>$parent,'status'=>$status])->all();
        return $data;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['pro_id' => 'cat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPros()
    {
        return $this->hasMany(Made::className(), ['made_id' => 'pro_id'])->viaTable('product', ['pro_id' => 'cat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPros0()
    {
        return $this->hasMany(Size::className(), ['size_id' => 'pro_id'])->viaTable('product', ['pro_id' => 'cat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPros1()
    {
        return $this->hasMany(Supplier::className(), ['sup_id' => 'pro_id'])->viaTable('product', ['pro_id' => 'cat_id']);
    }
}
