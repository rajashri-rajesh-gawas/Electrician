<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "electrician".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $email
 * @property string $contact
 */
class Electrician extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'electrician';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'email', 'contact'], 'required'],
            [['name', 'address', 'email', 'contact'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'email' => 'Email',
            'contact' => 'Contact',
        ];
    }
}
