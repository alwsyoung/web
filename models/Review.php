<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property int $id
 * @property string $text
 * @property string $createdAt
 * @property string|null $updatedAt
 * @property int $productId
 *
 * @property Product $product
 */
class Review extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'productId'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['productId'], 'integer'],
            [['text'], 'string', 'max' => 256],
            [['productId'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['productId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
            'productId' => 'Product ID',
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'productId']);
    }
}
