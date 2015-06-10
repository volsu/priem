<?php
/**
 * Created by PhpStorm.
 * User: Vuilov
 * Date: 04.06.2015
 * Time: 17:05
 */

namespace app\models;
use yii\db\Query;
use app\components\Util;

class Program
{
    public static function items($level = null)
    {
        $query      = new Query();
        $query->select('cg_oop_name')->distinct()->from('user');
        if($level){
            $query->andWhere('cg_level = :level', [':level' => $level]);
        }else{
            $query->andWhere('1=0');
        }
        $programmes = $query->orderBy('cg_oop_name')->all();
        return Util::indexArray($programmes, 'cg_oop_name');
    }
}