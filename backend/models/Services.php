<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property integer $id
 * @property string $heading
 * @property string $description
 * @property string $icon
 * @property string $image_file
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['heading', 'description', 'icon', 'image_file'], 'required'],
            [['heading', 'description', 'icon', 'image_file'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'heading' => 'Heading',
            'description' => 'Description',
            'icon' => 'Icon',
            'image_file' => 'Image File',
        ];
    }
}
