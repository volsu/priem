<?php
/**
 * Created by PhpStorm.
 * User: Vuilov
 * Date: 04.06.2015
 * Time: 17:05
 */

namespace app\models;
use yii\db\Query;
use yii\helpers\ArrayHelper;

class Program
{
    public static function items()
    {
        $query = new Query();
        return $result = ArrayHelper::map($query->select('cg_oop_name')->distinct()->from('user')->indexBy('cg_oop_name')->all(), 'cg_oop_name', 'cg_oop_name');
    }
}