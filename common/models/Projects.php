<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property string $image_file
 * @property string $heading
 * @property string $description
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_file', 'heading', 'description'], 'required'],
            [['image_file', 'heading', 'description'], 'string', 'max' => 255],
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
            'description' => 'Description',
        ];
    }
}
