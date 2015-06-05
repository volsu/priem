<?php
namespace app\models;
use yii\db\Query;

class Base
{
    public static function find()
    {
        $query = new Query();
        return $result = $query->select('cg_base')->distinct()->from('user')->all();
    }
}