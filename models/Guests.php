<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guests".
 *
 * @property integer $id
 * @property string $name
 * @property integer $phone
 */
class Guests extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guests';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],
            [['phone'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'phone' => 'Phone',
        ];
    }

    /**
     * @inheritdoc
     * @return GuestsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GuestsQuery(get_called_class());
    }
}
