<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "daily_weight".
 *
 * @property integer $id
 * @property string $date
 * @property integer $max
 * @property integer $min
 */
class DailyWeight extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'daily_weight';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'max', 'min'], 'required'],
            [['date'], 'safe'],
            [['max', 'min'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'max' => 'Max',
            'min' => 'Min',
        ];
    }
}
