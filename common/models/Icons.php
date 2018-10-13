<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "icons".
 *
 * @property integer $id
 * @property string $icon
 * @property string $name
 */
class Icons extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'icons';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['icon', 'name'], 'required'],
            [['icon', 'name'], 'string', 'max' => 255],
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
            'name' => 'Name',
        ];
    }
}
