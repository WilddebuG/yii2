<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "posts".
 *
 * @property int $posts_id
 * @property string $post_title
 * @property string $post_description
 * @property int $customer_id
 *
 * @property Customers $customer
 */
class Posts extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_title', 'customer_id'], 'required'],
            [['customer_id'], 'integer'],
            [['post_title', 'post_description'], 'string', 'max' => 45],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customers::className(), 'targetAttribute' => ['customer_id' => 'customer_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'posts_id' => 'Posts ID',
            'post_title' => 'Post Title',
            'post_description' => 'Post Description',
            'customer_id' => 'Customer ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customers::className(), ['customer_id' => 'customer_id']);
    }

    public function fields()
    {
        return [
            'Id' => 'posts_id',
            'Title' => 'post_title',
            'Desc' => 'post_description',
            'User_Id' => 'customer_id',
        ];
    }
}
