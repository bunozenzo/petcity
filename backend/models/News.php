<?php

namespace backend\models;
use yii\data\Pagination;
use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $new_id
 * @property int $new_cat_id
 * @property string $new_title
 * @property string $new_name
 * @property string $new_image
 * @property string $new_description
 * @property string $new_content
 * @property int $status
 * @property int $date_create
 * @property int $date_update
 *
 * @property Category $newCat
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['new_cat_id', 'new_title', 'new_name', 'new_image', 'new_description', 'new_content', 'date_create', 'date_update'], 'required'],
            [['new_cat_id', 'status', 'date_create', 'date_update'], 'integer'],
            [[ 'new_description','new_content'], 'string'],
            [['new_title', 'new_name'], 'string', 'max' => 100],
            [['new_image'], 'string', 'max' => 255],
            [['new_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['new_cat_id' => 'cat_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'new_id' => 'New ID',
            'new_cat_id' => 'Danh mục',
            'new_title' => 'Tiêu đề',
            'new_name' => 'Tên bài viết',
            'new_image' => 'Ảnh',
            'new_description' => 'Mô tả',
            'new_content' => 'Nội dung bài viết',
            'status' => 'Trạng thái',
            'date_create' => 'Ngày tạo',
            'date_update' => 'Ngày update',
        ];
    }
    public function getNews($cat)
    {
        $pagination = $this->getPagerNews($cat);
        $data = News::find()->asArray()->where('new_cat_id=:cat', ['cat' => $cat])
            ->offset($pagination->offset)
            ->orderBy(['date_create' => SORT_DESC])
            ->limit($pagination->limit)
            ->all();
        return $data;
    }
    public function getNew($new)
    {
        $pagination = $this->getPagerNews($new);
        $data = News::find()->asArray()->where('new_id=:new', ['new' => $new])->asArray()->all();
        return $data;
    }
    public function getPagerNews($pro)
    {
        $data = News::find()
            ->where('new_cat_id=:cat', ['cat' => $pro])
            ->all();
        $pagination = new Pagination(['totalCount' => count($data), 'pageSize' => '8']);
        return $pagination;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewCat()
    {
        return $this->hasOne(Category::className(), ['cat_id' => 'new_cat_id']);
    }
}
