<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "stats".
 *
 * @property integer $id
 * @property string $icon
 * @property string $description
 * @property string $heading
 */
class Stats extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stats';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['icon', 'description', 'heading'], 'required'],
            [['icon', 'description', 'heading'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'heading' => 'Heading',
        ];
    }
}
