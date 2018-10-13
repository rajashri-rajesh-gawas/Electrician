<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "teams".
 *
 * @property integer $id
 * @property string $fb_link
 * @property string $twitter_link
 * @property string $google_plus_link
 * @property string $image_file
 * @property string $name
 * @property string $designation
 */
class Teams extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teams';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fb_link', 'twitter_link', 'google_plus_link', 'image_file', 'name', 'designation'], 'required'],
            [['fb_link', 'twitter_link', 'google_plus_link', 'image_file', 'name', 'designation'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fb_link' => 'Fb Link',
            'twitter_link' => 'Twitter Link',
            'google_plus_link' => 'Google Plus Link',
            'image_file' => 'Image File',
            'name' => 'Name',
            'designation' => 'Designation',
        ];
    }
}
