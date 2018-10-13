<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "electric".
 *
 * @property integer $id
 * @property string $image_file
 * @property string $icon
 * @property string $heading
 * @property string $description
 */
class Electric extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'electric';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['icon', 'heading', 'description'], 'required'],
            [['icon', 'heading', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            
            'icon' => 'Icon',
            'heading' => 'Heading',
            'description' => 'Description',
        ];
    }
}
