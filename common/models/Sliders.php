<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sliders".
 *
 * @property integer $id
 * @property string $image_file
 * @property string $heading
 * @property string $caption
 */
class Sliders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sliders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_file', 'heading', 'caption'], 'required'],
            [['image_file', 'heading', 'caption'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image_file' => 'Image File',
            'heading' => 'Heading',
            'caption' => 'Caption',
        ];
    }
}
