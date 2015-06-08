<?php
/**
 * Created by PhpStorm.
 * User: Vuilov
 * Date: 04.06.2015
 * Time: 17:05
 */

namespace app\models;
use yii\base\Model;
use yii\db\Query;
use yii\helpers\ArrayHelper;

class Form extends Model
{
    public static function items()
    {
        $query = new Query();
        return $result = ArrayHelper::map($query->select('cg_form')->distinct()->from('user')->all(), 'cg_form', 'cg_form');
    }
}