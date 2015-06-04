<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property integer $object1
 * @property integer $object2
 * @property integer $object3
 * @property string $oop_code
 * @property string $oop_name
 * @property string $type_document
 * @property integer $is_benefit
 * @property integer $is_olymp
 * @property integer $is_target
 * @property integer $is_enrolled
 * @property integer $priority
 * @property string $base_enroll
 * @property string $order
 * @property string $form
 * @property string $level
 * @property string $oop_base
 * @property integer $is_expelled
 * @property string $enrollee_code
 * @property string $enrollee_name
 * @property integer $total_balls
 * @property integer $is_concurs_out
 * @property integer $is_rec_by_priority
 * @property integer $is_rec_by_other
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['object1', 'object2', 'object3', 'is_benefit', 'is_olymp', 'is_target', 'is_enrolled', 'priority', 'is_expelled', 'total_balls', 'is_concurs_out', 'is_rec_by_priority', 'is_rec_by_other'], 'integer'],
            [['oop_code', 'oop_name', 'type_document', 'base_enroll', 'order', 'form', 'level', 'oop_base', 'enrollee_code', 'enrollee_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'object1' => 'Object1',
            'object2' => 'Object2',
            'object3' => 'Object3',
            'oop_code' => 'Oop Code',
            'oop_name' => 'Oop Name',
            'type_document' => 'Type Document',
            'is_benefit' => 'Is Benefit',
            'is_olymp' => 'Is Olymp',
            'is_target' => 'Is Target',
            'is_enrolled' => 'Is Enrolled',
            'priority' => 'Priority',
            'base_enroll' => 'Base Enroll',
            'order' => 'Order',
            'form' => 'Form',
            'level' => 'Level',
            'oop_base' => 'Oop Base',
            'is_expelled' => 'Is Expelled',
            'enrollee_code' => 'Enrollee Code',
            'enrollee_name' => 'Enrollee Name',
            'total_balls' => 'Total Balls',
            'is_concurs_out' => 'Is Concurs Out',
            'is_rec_by_priority' => 'Is Rec By Priority',
            'is_rec_by_other' => 'Is Rec By Other',
        ];
    }
}
