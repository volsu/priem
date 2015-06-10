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
use app\components\Util;

class Form extends Model
{
    public static function items($level = null, $program = null)
    {
        $query = new Query();
        $query->select('cg_form')->distinct()->from('user');
        if($level && $program){
            $query->andWhere('cg_level = :level', [
                ':level'    => $level,
            ]);
            $query->andWhere('cg_oop_name = :oop', [
                ':oop'      => $program
            ]);
        }
        else{
            $query->andWhere('1=0');
        }


        //$command = $query->createCommand();
        //echo $command->rawSql;

        $forms = $query->orderBy('cg_form')->all();
        return Util::indexArray($forms, 'cg_form');
    }
}