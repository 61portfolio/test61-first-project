<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post_categories".
 *
 * @property integer $id
 * @property string $cat_name
 * @property string $cat_slug
 */
class PostCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name', ], 'required'],
            [['cat_name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 100000],
			[['slug'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_name' => 'Cat Name',
            'slug' => 'Category Slug',
            'description' => 'Description',
        ];
    }
}
