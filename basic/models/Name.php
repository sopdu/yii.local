<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "name".
 *
 * @property int $id
 * @property string $name
 * @property int $age
 */
class Name extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'name';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'age'], 'required'],
            [['age'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'age' => 'Age',
        ];
    }
}
