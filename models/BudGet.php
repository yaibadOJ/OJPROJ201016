<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "budget".
 *
 * @property integer $budget_id
 * @property string $budget_name
 */
class BudGet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'budget';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['budget_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'budget_id' => 'Budget ID',
            'budget_name' => 'Budget Name',
        ];
        }
    public static function GetList() {
        return \yii\helpers\ArrayHelper::map(self::find()->all(), 'budget_id', 'budget_name');
    }
}
