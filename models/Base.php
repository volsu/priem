<?php
namespace app\models;
use yii\db\Query;
use yii\helpers\ArrayHelper;

class Base
{
    public static function items()
    {
        $query = new Query();
        return $result = ArrayHelper::map($query->select('cg_base')->distinct()->from('user')->all(), 'cg_base', 'cg_base');
    }
}