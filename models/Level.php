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

class Level
{
    public static function items()
    {
        $query = new Query();
        return $result = ArrayHelper::map($query->select('cg_level')->distinct()->from('user')->all(), 'cg_level', 'cg_level');
    }
}