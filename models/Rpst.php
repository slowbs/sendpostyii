<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rpst".
 *
 * @property int $id
 * @property string $a1
 * @property string $a2
 * @property string $a3
 * @property string $a4
 * @property string $a5
 * @property string $a6
 * @property string $a7
 * @property string $a8
 * @property string $a9
 * @property string $a10
 * @property string $a11
 * @property string $a12
 * @property string $b1
 * @property string $b2
 * @property string $b3
 * @property string $b4
 * @property string $b5
 * @property string $b6
 * @property string $b7
 * @property string $b8
 * @property string $b9
 * @property string $b10
 * @property string $b11
 * @property string $b12
 * @property string $apcode
 * @property string $rpstcode
 */
class Rpst extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rpst';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            /* [['apcode', 'rpstcode'], 'required'], */
            [['a1', 'a2', 'a3', 'a4', 'a5', 'a6', 'a7', 'a8', 'a9', 'a10', 'a11', 'a12', 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'b9', 'b10', 'b11', 'b12', 'apcode', 'rpstcode'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'a1' => 'A1',
            'a2' => 'A2',
            'a3' => 'A3',
            'a4' => 'A4',
            'a5' => 'A5',
            'a6' => 'A6',
            'a7' => 'A7',
            'a8' => 'A8',
            'a9' => 'A9',
            'a10' => 'A10',
            'a11' => 'A11',
            'a12' => 'A12',
            'b1' => 'B1',
            'b2' => 'B2',
            'b3' => 'B3',
            'b4' => 'B4',
            'b5' => 'B5',
            'b6' => 'B6',
            'b7' => 'B7',
            'b8' => 'B8',
            'b9' => 'B9',
            'b10' => 'B10',
            'b11' => 'B11',
            'b12' => 'B12',
            'apcode' => 'Apcode',
            'rpstcode' => 'Rpstcode',
        ];
    }
}
