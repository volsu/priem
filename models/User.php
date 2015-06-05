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
 * @property integer $ind_achivement
 * @property string $type_document
 * @property integer $is_benefit
 * @property integer $is_olymp
 * @property integer $is_target
 * @property integer $is_enrolled
 * @property integer $priority
 * @property string $order
 * @property string $oop_base
 * @property integer $is_expelled
 * @property string $enrollee_code
 * @property string $enrollee_name
 * @property integer $total_balls
 * @property integer $is_concurs_out
 * @property integer $is_rec_by_priority
 * @property integer $is_rec_by_other
 * @property string $cg_code
 * @property string $cg_view
 * @property string $cg_form
 * @property string $cg_oop_code
 * @property string $cg_oop_name
 * @property string $cg_level
 * @property string $cg_base
 * @property integer $cg_unique_right
 * @property integer $stat_plan
 * @property integer $stat_quota
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
            [['object1', 'object2', 'object3', 'ind_achivement', 'is_benefit', 'is_olymp', 'is_target', 'is_enrolled', 'priority', 'is_expelled', 'total_balls', 'is_concurs_out', 'is_rec_by_priority', 'is_rec_by_other', 'cg_unique_right', 'stat_plan', 'stat_quota'], 'integer'],
            [['type_document', 'order', 'oop_base', 'enrollee_code', 'enrollee_name', 'cg_code', 'cg_view', 'cg_form', 'cg_oop_code', 'cg_oop_name', 'cg_level', 'cg_base'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'object1' => Yii::t('app', 'Object1'),
            'object2' => Yii::t('app', 'Object2'),
            'object3' => Yii::t('app', 'Object3'),
            'ind_achivement' => Yii::t('app', 'Ind Achivement'),
            'type_document' => Yii::t('app', 'Type Document'),
            'is_benefit' => Yii::t('app', 'Is Benefit'),
            'is_olymp' => Yii::t('app', 'Is Olymp'),
            'is_target' => Yii::t('app', 'Is Target'),
            'is_enrolled' => Yii::t('app', 'Is Enrolled'),
            'priority' => Yii::t('app', 'Priority'),
            'order' => Yii::t('app', 'Order'),
            'oop_base' => Yii::t('app', 'Oop Base'),
            'is_expelled' => Yii::t('app', 'Is Expelled'),
            'enrollee_code' => Yii::t('app', 'Enrollee Code'),
            'enrollee_name' => Yii::t('app', 'Enrollee Name'),
            'total_balls' => Yii::t('app', 'Total Balls'),
            'is_concurs_out' => Yii::t('app', 'Is Concurs Out'),
            'is_rec_by_priority' => Yii::t('app', 'Is Rec By Priority'),
            'is_rec_by_other' => Yii::t('app', 'Is Rec By Other'),
            'cg_code' => Yii::t('app', 'Cg Code'),
            'cg_view' => Yii::t('app', 'Cg View'),
            'cg_form' => Yii::t('app', 'Cg Form'),
            'cg_oop_code' => Yii::t('app', 'Cg Oop Code'),
            'cg_oop_name' => Yii::t('app', 'Cg Oop Name'),
            'cg_level' => Yii::t('app', 'Cg Level'),
            'cg_base' => Yii::t('app', 'Cg Base'),
            'cg_unique_right' => Yii::t('app', 'Cg Unique Right'),
            'stat_plan' => Yii::t('app', 'Stat Plan'),
            'stat_quota' => Yii::t('app', 'Stat Quota'),
        ];
    }
}
