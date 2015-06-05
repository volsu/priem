<?php
/**
 * Created by PhpStorm.
 * User: Vuilov
 * Date: 04.06.2015
 * Time: 17:05
 */

namespace app\models;
use yii\db\Query;

class Level
{
    public static function find()
    {
        $query = new Query();
        return $result = $query->select('cg_level')->distinct()->from('user')->all();
    }
}